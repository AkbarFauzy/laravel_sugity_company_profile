<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Http\Request;

use App\Models\CSR;

class CSRController extends Controller
{
    use ApiHelpers;
    public function GetCSR(){
        try {
            $csr = CSR::with('gallery')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch CSR", $exception->getMessage());
        } 
        return $this->onSuccess($csr, '');
    }

    public function GetAllCSR(){
        try {
            $csr = CSR::with('gallery')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch CSR", $exception->getMessage());
        } 
        return $this->onSuccess($csr, '');
    }

    public function GetCSRById($id){
        try{
            $csr = CSR::with('gallery')->findOrFail($id);
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch CSR", $exception->getMessage());
        }
        return $this->onSuccess($csr, '');
    }
    
    public function GetLatestCSR(){
        try {
            $csr = CSR::orderBy('created_at', 'DESC')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch CSR", $exception->getMessage());
        }
        return $this->onSuccess($csr, '');
    }

    public function AddCSR(Request $req){
        try{
            $req->validate([
                'headline' => 'required',
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'content' => 'required',
                'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($image = $req->file('thumbnail')) {
                $originName = $req->file('thumbnail')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $req->file('thumbnail')->getClientOriginalExtension();
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $req->file('thumbnail')->move(public_path('images/csr/'), $fileName);
                $url = asset('images/csr/' . $fileName);
            }

            DB::beginTransaction();
            $csr = CSR::create([
                'headline' => $req->input('headline'),
                'headline_img' => $fileName,
                'content' => $req->input('content'),
                'isPublish' => $req->input('isPublish')
            ]);
     
            if ($files = $req->file('gallery')) {
                foreach ($files as $key => $file) {
                    $originName = $file->getClientOriginalName();
                    $fileName = pathinfo($originName, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileName = $fileName . '_' . time() . '.' . $extension;
                    $file->move(public_path('images/csr/content/'), $fileName);
                    $url = asset('images/csr/content/' . $fileName);            
                    $csr->gallery()->create([
                        'img' => $fileName,
                    ]);
                }
            }
            DB::commit();
        }catch(\Exception $exception){  
            DB::rollback();
            return $this->onError("Can't Add CSR", $exception->getMessage());
        }

        return $this->onSuccess($news, 'Add CSR Success!');
    }


    public function UpdateCSR(Request $req, $id){
        try{
            $req->validate([
                'headline' => 'required',
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'content' => 'required',
                'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            DB::beginTransaction();
            $csr = CSR::findOrFail($id);

            if($req->has('thumbnail')){
                $file = $req->file('thumbnail');
                $image_name = $file->getClientOriginalName();
                $current_img_path = public_path('images/csr/' . $csr->thumbail);
                if (file_exists($current_img_path)) {
                    unlink($current_img_path);
                }

                $file->move(public_path('images/csr/'), $image_name);
                $csr->thumbnail = $image_name;

            }

            $csr->update([
                'headline' => $req->input('headline'),
                'content' => $req->input('content'),
                'isPublish' => $req->input('isPublish') 
            ]);

            if ($req->hasFile('gallery')) {
                $newGalleryImages = [];
    
                foreach ($req->file('gallery') as $file) {
                    $gallery_image_name = $file->getClientOriginalName();
                    $file->move(public_path('images/csr/content/'), $gallery_image_name);
                    $newGalleryImages[] = $gallery_image_name;
    
                    $csr->gallery()->create([
                        'img' => $gallery_image_name,
                    ]);
                }
    
                $existingGallery = $csr->gallery()->pluck('img')->toArray();
                $imagesToDelete = array_diff($existingGallery, $newGalleryImages);
    
                foreach ($imagesToDelete as $image) {
                    $imagePath = public_path('images/csr/content/' . $image);
    
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
    
                    $csr->gallery()->where('img', $image)->delete();
                }
            }
            
            DB::commit();
        }
        catch(\Exception $exception){
            DB::rollback();
            return $this->onError("Can't Add CSR", $exception->getMessage());
        }
    }

    public function TogglePublishCSR($id){
        try{
            $csr = CSR::findOrFail($id);
            if($csr->isPublish){
                $csr->update(['isPublish'=>False]);
                $message = "is Draft";
            }else{
                $csr->update(['isPublish'=>True]);
                $message = "is Publish";
            }
        }catch(\Exception $exception){  
            return $this->onError("Can't Add CSR", $exception->getMessage());
        }

        return $this->onSuccess($csr, 'Toggle CSR Success! CSR '.$message);
    }

    public function DeleteCSR($id){
        try {
            DB::beginTransaction();
            $csr = CSR::findOrFail($id);
            $current_img_path = asset('images/csr'.$csr->headline_img);

            $galleryImages = $csr->gallery()->get();
            $csr->delete();
            
            if(file_exists($current_img_path)){
                unlink($current_img_path);
            }

            foreach ($galleryImages as $image) {
                $imagePath = public_path('images/csr/content/' . $image->img);
    
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
    
                $image->delete();
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            return $this->onError('Delete CSR Failed!', $exception->getMessage());
        }

        return $this->onSuccess('', 'Delete CSR Success!');

    }

    public function UploadContent(Request $req){
        if ($req->hasFile('upload')) {
            $originName = $req->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $req->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
    
            $req->file('upload')->move(public_path('media'), $fileName);
    
            $url = asset('media/' . $fileName);
            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => $url]);
        }
    }

}
