<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;

use App\Models\Product;

class ProductController extends Controller
{
    use ApiHelpers;
    public function GetProducts(){
        try {
            $data = Product::all();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Product", $exception->getMessage());
        }
        
        return $this->onSuccess($data, '');
    }

    public function GetProductById($id){
        try{
            $data = Product::findOrFail($id);
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch Product", $exception->getMessage());
        }
        return $this->onSuccess($data, '');
    }

    public function AddProduct(Request $req){
        try{
            $req->validate([
                'inputName' => 'required',
                'description' => 'required',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            
            $fileName = time() . '.' . $req->img->extension();
            $req->img->storeAs('public/images', $fileName);

            DB::beginTransaction();
            $data = Product::create([
                'name' => $req->input('inputName'),
                'description' => $req->input('inputDescription'),
                'img' => $fileName
            ]);
            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return $this->onError("Can't Add Product", $exception->getMessage());
        }

        return $this->onSuccess($data, '');
    }

    public function EditProduct(Request $req, $id){
        try{
            $req->validate([
                'inputName' => 'required',
                'description' => 'required',
            ]);

            DB::beginTransaction();
            $data = Product::findOrFail($id);
            $data->update([
                'name' => $req->input('inputName'),
                'description'=> $req->input('inputDescription'),
            ]);

            DB::commit();
        }catch(\Exception $exception){
            DB::rollback();
            return $this->onError("Can't Edit Product", $exception->getMessage());
        }
        return $this->onSuccess($data,'');
    }


    public function DeleteProduct($id){
        try {
            DB::beginTransaction();
            $data = Product::findOrFail($id)->delete();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            return $this->onError("Can't Delete Product", $exception->getMessage());
        }
        return $this->onSuccess([],'');
    }

}
