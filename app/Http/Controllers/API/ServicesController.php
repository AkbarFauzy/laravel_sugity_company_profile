<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Services;

class ServicesController extends Controller
{
    use ApiHelpers;

    public function GetServices(){
        try {
            $services = Services::all();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Services", $exception->getMessage());
        } 
        return $this->onSuccess($services, '');
    }

    public function GetServicesById($id){
        try {
            $services = Services::findOrFail($id);
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Services", $exception->getMessage());
        } 
        return $this->onSuccess($services, '');
    }

    public function AddServices(Request $req){
        try{
            $req->validate([
                'name' => 'required',
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($image = $req->file('img')) {
                $destinationPath = 'images/services/';
                $img = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $img);
            }

            DB::beginTransaction();
            $services = Services::create([
                'name' => $req->input('name'),
                'description' => $req->input('description'),
                'img' => $img,
            ]);
            DB::commit();
        }catch(\Exception $exception){  
            DB::rollback();
            return $this->onError("Can't Add Services", $exception->getMessage());
        }

        return $this->onSuccess($services, 'Add Services Success!');
    }

    public function EditServices(Reqeust $req, $id){
        try{
            $req->validate([
                'name' => 'required',
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            DB::beginTransaction();
            $services = Services::findOrFail($id);

            if($req->has('img') && $req->file('img') != null){
                $file = $req->file('img');
                $image_name = $file->getClientOriginalName();
            }else{
                $image_name = $services->img;
            }

            if($req->has('img') && $req->file('img') != null)
                $current_img_path = public_path('images/services/'.$services->img);


            $services->update([
                'name' => $req->input('name'),
                'description' => $req->input('description'),
                'img' => $img,
            ]);

            if($req->has('img') && $req->file('img') != null)
              if(file_exists($current_img_path)){
                unlink($current_img_path);
              }
            if($req->has('img') && $req->file('img') != null)
                $file->move(public_path('images/services/'), $image_name);
            DB::commit();

        }
        catch(\Exception $exception){
            DB::rollback();
            return $this->onError("Can't Add Services", $exception->getMessage());
        }
    }

    public function DeleteServices($id){
        try {
            DB::beginTransaction();
            $services = Services::findOrFail($id);
            $current_img_path = asset('images/services/'.$services->img);
            if(file_exists($current_img_path)){
                unlink($current_img_path);
            }
            $services->delete();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            return $this->onError('Delete Services Failed!', $exception->getMessage());
        }

        return $this->onSuccess('', 'Delete Services Success!');
    }

    public function reorder($id){
        return null;
    }

}
