<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

    public function GetSlidersByPage($page){
        try{
            $slider = Sliders::where('page', $page)->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Sliders", $exception->getMessage());
        } 
        return $this->onSuccess($slider, '');
    }

    public function GetSlidersById($id){
        try {
            $slider = Sliders::findOrFail($id);
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Sliders", $exception->getMessage());
        } 
        return $this->onSuccess($slider, '');
    }

    public function AddSliders(Request $req){
        try{
            $req->validate([
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5124',
            ]);

            if ($image = $req->file('img')) {
                $originName = $req->file('img')->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $req->file('img')->getClientOriginalExtension();
                $fileName = Str::slug($fileName, '_') . '_' . time() . '.' . $extension;
                $req->file('img')->move(public_path('images/sliders/'), $fileName);
            }

            DB::beginTransaction();
            $slider = Sliders::create([
                'tagline' => $req->input('tagline'),
                'img' => $fileName,
                'page' => $req->input('page'),
                'position' => $req->input('position'),
                'x_offset' => $req->input('x_offset'),
                'y_offset' => $req->input('y_offset')
            ]);
            DB::commit();
        }catch(\Exception $exception){  
            DB::rollback();
            return $this->onError("Can't Add Sliders", $exception->getMessage());
        }

        return $this->onSuccess($slider, 'Add Sliders Success!');
    }

    public function UpdateSliders(Request $req, $id){
        try{
            $req->validate([
                'img' => '|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            DB::beginTransaction();
            $slider = Sliders::findOrFail($id);

            if($req->has('img')){
                $file = $req->file('img');
                
                $current_img_path = public_path('images/sliders/'.$slider->img);
                if (is_file($current_img_path) && !empty($slider->img)) {
                    unlink($current_img_path);
                }

                $originName = $file->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileName = Str::slug($fileName, '_') . '_' . time() . '.' . $extension;

                $file->move(public_path('images/sliders/'), $fileName);

                $slider->img = $fileName;
            }

            $slider->update([
                'tagline' => $req->input('tagline'),
                'page' => $req->input('page'),
                'position' => $req->input('position'),
                'x_offset' => $req->input('x_offset'),
                'y_offset' => $req->input('y_offset')
            ]);
            
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
            $current_img_path = asset('images/sliders/'.$slider->img);
            $slider->delete();
            if(is_file($current_img_path)){
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
