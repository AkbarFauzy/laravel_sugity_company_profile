<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\News;
use App\Models\NewsContentGallery;

class NewsController extends Controller
{
    use ApiHelpers;
    public function GetNews(){
        try {
            $news = News::with('gallery')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch News", $exception->getMessage());
        } 
        return $this->onSuccess($news, '');
    }

    public function GetAllNews(){
        try {
            $news = News::with('gallery')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch News", $exception->getMessage());
        } 
        return $this->onSuccess($news, '');
    }

    public function GetNewsById($id){
        try{
            $news = News::with('gallery')->findOrFail($id);
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch News", $exception->getMessage());
        }
        return $this->onSuccess($news, '');
    }
    
    public function GetLatestNews(){
        try {
            $news = News::orderBy('created_at', 'DESC')->where('isPublish', true)->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch News", $exception->getMessage());
        }
        return $this->onSuccess($news, '');
    }

    public function AddNews(Request $req){
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
                $req->file('thumbnail')->move(public_path('images/news/'), $fileName);
                $url = asset('images/news/' . $fileName);
            }

            DB::beginTransaction();
            $news = News::create([
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
                    $file->move(public_path('images/news/content/'), $fileName);
                    $url = asset('images/news/content/' . $fileName);            
                    $news->gallery()->create([
                        'img' => $fileName,
                    ]);
                }
            }
            
            DB::commit();
        }catch(\Exception $exception){  
            DB::rollback();
            return $this->onError("Can't Add News", $exception->getMessage());
        }

        return $this->onSuccess($news, 'Add News Success!');
    }


    public function UpdateNews(Request $req, $id){
        try{
            $req->validate([
                'headline' => 'required',
                'thumbnail' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'content' => 'required',
                'gallery.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            DB::beginTransaction();
            $news = News::findOrFail($id);

            if($req->has('thumbnail')){
                $file = $req->file('thumbnail');
                $current_img_path = public_path('images/news/'.$news->headline_img);
                if (file_exists($current_img_path)) {
                    unlink($current_img_path);
                }

                $originName = $file->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileName = $fileName . '_' . time() . '.' . $extension;
                $file->move(public_path('images/news/'), $fileName);

                $news->headline_img = $fileName;
            }

            $news->update([
                'headline' => $req->input('headline'),
                'content' => $req->input('content'),
                'isPublish' => $req->input('isPublish') 
            ]);

            if ($req->hasFile('gallery')) {
                $newGalleryImages = [];
    
                foreach ($req->file('gallery') as $file) {
                    $gallery_image_name = $file->getClientOriginalName();
                    $fileName = pathinfo($gallery_image_name, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileName = $fileName . '_' . time() . '.' . $extension;
                    $file->move(public_path('images/news/content/'), $fileName);

                    $newGalleryImages[] = $fileName;

                    $news->gallery()->create([
                        'img' => $fileName,
                    ]);
                }
    
                $existingGallery = $news->gallery()->pluck('img')->toArray();
                $imagesToDelete = array_diff($existingGallery, $newGalleryImages);
    
                foreach ($imagesToDelete as $image) {
                    $imagePath = public_path('images/news/content/'.$image);
    
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }
    
                    $news->gallery()->where('img', $image)->delete();
                }
            }
            
            DB::commit();
        }
        catch(\Exception $exception){
            DB::rollback();
            return $this->onError("Can't Add News", $exception->getMessage());
        }

        return $this->onSuccess($news, 'Update News Success!');

    }

    public function TogglePublishNews($id){
        try{
            $news = News::findOrFail($id);
            if($news->isPublish){
                $news->update(['isPublish'=>False]);
                $message = "is Draft";
            }else{
                $news->update(['isPublish'=>True]);
                $message = "is Publish";
            }
        }catch(\Exception $exception){  
            return $this->onError("Can't Add News", $exception->getMessage());
        }

        return $this->onSuccess($news, 'Toggle News Success! News '.$message);
    }

    public function DeleteNews($id){
        try {
            DB::beginTransaction();
            $news = News::findOrFail($id);
            $current_img_path = asset('images/news'.$news->headline_img);

            $galleryImages = $news->gallery()->get();
            
            if(file_exists($current_img_path)){
                unlink($current_img_path);
            }
            
            foreach ($galleryImages as $image) {
                $imagePath = public_path('images/news/content/' . $image);
                
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $news->delete();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            return $this->onError('Delete News Failed!', $exception->getMessage());
        }

        return $this->onSuccess('', 'Delete News Success!');

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
