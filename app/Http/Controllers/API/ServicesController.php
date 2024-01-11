<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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

    public function UpdateServices(Request $req, $id){
        try{
            $req->validate([
                'name' => 'required',
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            DB::beginTransaction();
            $services = Services::findOrFail($id);

            if($req->has('img')){
                $file = $req->file('img');
                $current_img_path = public_path('images/services/'.$services->img);
                if (is_file($current_img_path)) {
                    unlink($current_img_path);
                }

                $originName = $file->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileName = Str::slug($fileName, '_') . '_' . time() . '.' . $extension;
                $file->move(public_path('images/services/'), $fileName);

                $services->img = $fileName;
            }

            $services->update([
                'name' => $req->input('name'),
                'description' => $req->input('description'),
            ]);
            DB::commit();
        }
        catch(\Exception $exception){
            DB::rollback();
            return $this->onError("Can't Add Services", $exception->getMessage());
        }
        
        return $this->onSuccess($services, 'Update Services Success!');
    }

    public function DeleteServices($id){
        try {
            DB::beginTransaction();
            $services = Services::findOrFail($id);
            $current_img_path = asset('images/services/'.$services->img);
            if(is_file($current_img_path)){
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
