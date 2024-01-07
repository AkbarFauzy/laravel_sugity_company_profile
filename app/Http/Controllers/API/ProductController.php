<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;


use App\Models\Product;

class ProductController extends Controller
{
    use ApiHelpers;
    public function GetProducts(){
        try {
            $customCategoryOrder = [
                'Public Transport', 
                'Healthcare Vehicle', 
                'Export Vehicle', 
                'Interior Part', 
                'Exterior Part', 
                'Mold'
            ];

            $orderByExpression = 'CASE category ';
            foreach ($customCategoryOrder as $key => $category) {
                $orderByExpression .= "WHEN '{$category}' THEN {$key} ";
            }
            $orderByExpression .= 'ELSE ' . count($customCategoryOrder) . ' END';

            $product = Product::orderByRaw($orderByExpression)
            ->with('gallery')
            ->get();

        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Product", $exception->getMessage());
        }
        
        return $this->onSuccess($product, '');
    }

    public function GetProductById($id){
        try{
            $product = Product::with('gallery')->findOrFail($id);
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch Product", $exception->getMessage());
        }
        return $this->onSuccess($product, '');
    }

    public function GetVehicles(){
        try{
            $categories = [
                'Public Transport',
                'Healthcare Vehicle',
                'Export Vehicle',
                'Other'
            ];
            $vehicles = Product::whereIn('category', $categories)->get();
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch Vehicles", $exception->getMessage());
        }
        return $this->onSuccess($vehicles, '');
    }

    public function GetPublicTransport(){
        try{
            $vehicles = Product::where('category', 'Public Transport')->get();
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch Vehicles", $exception->getMessage());
        }
        return $this->onSuccess($vehicles, '');
    }

    public function GetHealthcareVehicles(){
        try{
            $vehicles = Product::where('category', 'Healthcare Vehicle')->get();
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch Vehicles", $exception->getMessage());
        }
        return $this->onSuccess($vehicles, '');
    }

    public function GetExportVehicles(){
        try{
            $vehicles = Product::where('category', 'Export Vehicle')->get();
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch Vehicles", $exception->getMessage());
        }
        return $this->onSuccess($vehicles, '');
    }

    public function GetParts(){
        try{
            $categories = [
                'Exterior Part',
                'Interior Part'
            ];
            $parts = Product::whereIn('category', $categories)->get();
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch Parts", $exception->getMessage());
        }
        return $this->onSuccess($parts, '');
    }

    public function GetInteriorParts(){
        try{
            $vehicles = Product::where('category', 'Interior Part')->get();
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch Parts", $exception->getMessage());
        }
        return $this->onSuccess($vehicles, '');
    }

    public function GetExteriorParts(){
        try{
            $vehicles = Product::where('category', 'Exterior')->get();
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch Parts", $exception->getMessage());
        }
        return $this->onSuccess($vehicles, '');
    }

    public function GetMold(){
        try{
            $mold = Product::where('category', 'Mold')->get();
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch Mold", $exception->getMessage());
        }
        return $this->onSuccess($mold, '');
    }

    public function AddProduct(Request $req){
        try{
            $req->validate([
                'name' => 'required',
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'interior.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'exterior.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($image = $req->file('img')) {
                $originName = $req->file('img')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $req->file('img')->getClientOriginalExtension();
                $fileName = Str::slug($fileName, '_') . '_' . time() . '.' . $extension;
                $req->file('img')->move(public_path('images/products/'), $fileName);
                $url = asset('images/products/' . $fileName);
            }

            DB::beginTransaction();

            $product = Product::create([
                'name' => $req->input('name'),
                'category' => $req->input('category'),
                'left_content' => $req->input('left_content'),
                'right_content' => $req->input('right_content'),
                'img' => $fileName
            ]);

            if ($files = $req->file('interior')) {
                foreach ($files as $key => $file) {
                    $originName = $file->getClientOriginalName();
                    $fileName = pathinfo($originName, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileName = Str::slug($fileName, '_') . '_' . time() . '.' . $extension;
                    $file->move(public_path('images/products/content/'), $fileName);
                    $url = asset('images/products/content/' . $fileName);            
                    $product->gallery()->create([
                        'img' => $fileName,
                        'type' => "interior",
                    ]);
                }
            }
            
            if ($files = $req->file('exterior')) {
                foreach ($files as $key => $file) {
                    $originName = $file->getClientOriginalName();
                    $fileName = pathinfo($originName, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileName = Str::slug($fileName, '_') . '_' . time() . '.' . $extension;
                    $file->move(public_path('images/products/content/'), $fileName);
                    $url = asset('images/products/content/' . $fileName);            
                    $product->gallery()->create([
                        'img' => $fileName,
                        'type' => "exterior",
                    ]);
                }
            }

            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return $this->onError("Can't Add Product", $exception->getMessage());
        }

        return $this->onSuccess($product, '');
    }

    public function UpdateProduct(Request $req, $id){
        try{
            $req->validate([
                'name' => 'required',
                'img' => ' image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'interior.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'exterior.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            DB::beginTransaction();
            $product = Product::findOrFail($id);

            if($req->has('img')){
                $file = $req->file('img');
                
                $current_img_path = public_path('images/products/'.$product->img);
                if (file_exists($current_img_path) && !empty($product->img)) {
                    unlink($current_img_path);
                }

                $originName = $file->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileName = Str::slug($fileName, '_') . '_' . time() . '.' . $extension;

                $file->move(public_path('images/products/'), $fileName);

                $product->img = $fileName;
            }
            
            $product->update([
                'name' => $req->input('name'),
                'category' => $req->input('category'),
                'left_content' => $req->input('left_content'),
                'right_content' => $req->input('right_content')
            ]);
            
            $newGalleryImages = $req->uploadedGallery;
            if ($req->hasFile('interior')) {
                foreach ($req->file('interior') as $file) {
                    $originName = $file->getClientOriginalName();
                    $fileName = pathinfo($originName, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileName = $fileName . '_' . time() . '.' . $extension;
                    
                    $file->move(public_path('images/products/content/'), $fileName);
                    $newGalleryImages[] = $fileName;
                    
                    $product->gallery()->create([
                        'img' => $fileName,
                        'type' => 'interior'
                    ]);
                }
            }
            
            if($req->hasFile('exterior')){
                foreach ($req->file('exterior') as $file){
                    $originName = $file->getClientOriginalName();
                    $fileName = pathinfo($originName, PATHINFO_FILENAME);
                    $extension = $file->getClientOriginalExtension();
                    $fileName = Str::slug($fileName, '_') . '_' . time() . '.' . $extension;

                    $file->move(public_path('images/products/content/'), $fileName);
                    $newGalleryImages[] = $fileName;

                    $product->gallery()->create([
                        'img' => $fileName,
                        'type' => 'exterior'
                    ]);
                }    
            }

            $existingGallery = $product->gallery()->pluck('img')->toArray();
            if($newGalleryImages && $existingGallery){
                
                $imagesToDelete = array_diff($existingGallery, $newGalleryImages);
                foreach ($imagesToDelete as $image) {
                    $imagePath = public_path('images/products/content/'.$image);
    
                    if (file_exists($imagePath)) {
                        unlink($imagePath);
                    }

                    $product->gallery()->where('img', $image)->delete();
                }
            }
            
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return $this->onError("Can't Edit Product", $exception->getMessage());
        }

        return $this->onSuccess($product,'Update Products Success!');
    }


    public function DeleteProduct($id){
        try {
            DB::beginTransaction();
            $product = Product::findOrFail($id);
            $current_img_path = asset('images/products/'.$product->img);

            $galleryImages = $product->gallery()->get();

            if(file_exists($current_img_path)){
                unlink($current_img_path);
            }
            
            foreach ($galleryImages as $image) {
                $imagePath = public_path('images/products/content/' . $image);
                
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
            $product->delete();

            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            return $this->onError("Can't Delete Product", $exception->getMessage());
        }
        return $this->onSuccess([],'');
    }

}
