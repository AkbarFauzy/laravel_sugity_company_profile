<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Sliders;

class SlidersController extends Controller
{
    use ApiHelpers;
   
    public function GetSliders(){
        try {
            $slider = Sliders::all();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Sliders", $exception->getMessage());
        } 
        return $this->onSuccess($slider, '');
    }

    public function AddSliders(Request $req){
        try{
            $req->validate([
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            if ($image = $req->file('img')) {
                $destinationPath = 'images/sliders';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
            }

            DB::beginTransaction();
            $slider = Sliders::create([
                'tagline' => $req->input('tagline'),
                'img' => $profileImage,
                'page' => $req->input('page'),
                'width' => $req->input('width'),
                'height' => $req->input('height')
            ]);
            DB::commit();
        }catch(\Exception $exception){  
            DB::rollback();
            return $this->onError("Can't Add Sliders", $exception->getMessage());
        }

        return $this->onSuccess($slider, 'Add Sliders Success!');
    }

    public function EditSliders(Reqeust $req, $id){
        try{
            $req->validate([
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            DB::beginTransaction();
            $slider = Sliders::findOrFail($id);

            if($req->has('img') && $req->file('img') != null){
                $file = $req->file('img');
                $image_name = $file->getClientOriginalName();
            }else{
                $image_name = $slider->img;
            }

            if($req->has('img') && $req->file('img') != null)
                $current_img_path = public_path('images/sliders'.$slider->img);

            $slider->update([
                'tagline' => $req->input('tagline'),
                'img' =>  $image_name,
                'page' => $req->input('page'),
                'width' => $req->input('width'),
                'height' => $req->input('height')
            ]);

            if($req->has('img') && $req->file('img') != null)
              if(file_exists($current_img_path)){
                unlink($current_img_path);
              }
            if($req->has('img') && $req->file('img') != null)
                $file->move(public_path('images/sliders'), $image_name);
            DB::commit();

        }
        catch(\Exception $exception){
            DB::rollback();
            return $this->onError("Can't Add Sliders", $exception->getMessage());
        }
    }

    public function DeleteSliders($id){
        try {
            DB::beginTransaction();
            $slider = Sliders::findOrFail($id);
            $current_img_path = asset('images/sliders'.$slider->img);
            $slider->delete();
            if(file_exists($current_img_path)){
                unlink($current_img_path);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            return $this->onError('Delete Sliders Failed!', $exception->getMessage());
        }

        return $this->onSuccess('', 'Delete Sliders Success!');
    }

    public function reorder($id){
        return null;
    }



}
