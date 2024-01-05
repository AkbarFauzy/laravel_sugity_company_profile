<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\BOD;

class BODController extends Controller
{
    use ApiHelpers;
    public function GetPresidentDirector(){
        try {
            $bod = BOD::where('position', 'President Director')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Director", $exception->getMessage());
        }
        
        return $this->onSuccess($bod, '');
    }


    public function GetExecutiveVicePresident(){
        try {
            $bod = BOD::where('position', 'Executive Vice President')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Executive Vice President", $exception->getMessage());
        }
        
        return $this->onSuccess($bod, '');
    }
    

    public function GetDirectors(){
        try {
            $bod = BOD::where('position', 'Director')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Directors", $exception->getMessage());
        }
        
        return $this->onSuccess($bod, '');
    }

    public function GetCommissioners(){
        try {
            $bod = BOD::where('position', 'Commisioner')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Commisioners", $exception->getMessage());
        }
        
        return $this->onSuccess($bod, '');
    }

    public function GetBOD(){
        try {
            $bod = BOD::all();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Board of Directors", $exception->getMessage());
        } 
        return $this->onSuccess($bod, '');
    }

    public function GetBODById($id){
        try {
            $bod = BOD::findOrFail($id);
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Board of Directors", $exception->getMessage());
        } 
        return $this->onSuccess($bod, '');
    }

    public function AddBOD(Request $req){
        try{
            $req->validate([
                'name' => 'required',
                'position' => 'required',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($image = $req->file('img')) {
                $destinationPath = 'images/bod';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
            }

            DB::beginTransaction();
            $bod = BOD::create([
                'name' => $req->input('name'),
                'position' => $req->input('position'),
                'img' => $profileImage,
                'affiliation' => $req->input('affiliation')
            ]);
            DB::commit();
        }catch(\Exception $exception){  
            DB::rollback();
            return $this->onError("Can't Add Board of Director", $exception->getMessage());
        }

        return $this->onSuccess($bod, 'Add Board of Director Success!');
    }

    public function UpdateBOD(Request $req, $id){
        try{
            $req->validate([
                'name' => 'required',
                'position' => 'required',
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            DB::beginTransaction();
            $bod = BOD::findOrFail($id);

            if($req->has('img') && $req->file('img') != null){
                $file = $req->file('img');
                $image_name = $file->getClientOriginalName();
            }else{
                $image_name = $bod->img;
            }

            if($req->has('img') && $req->file('img') != null)
                $current_img_path = public_path('images/bod/'.$bod->img);
                $bod->update([
                    'img' => $image_name,
                ]);

            $bod->update([
                'name' => $req->input('name'),
                'position' => $req->input('position'),
                'affiliation' => $req->input('affiliation') 
            ]);

            if($req->has('img') && $req->file('img') != null)
              if(file_exists($current_img_path)){
                unlink($current_img_path);
              }
            if($req->has('img') && $req->file('img') != null)
                $file->move(public_path('images/bod/'), $image_name);
            DB::commit();
        }
        catch(\Exception $exception){
            DB::rollback();
            return $this->onError("Can't Update Board of Director", $exception->getMessage());
        }

        return $this->onSuccess($bod, 'Update Board of Director Success!');
    }

    public function DeleteBOD($id){
        try {
            DB::beginTransaction();
            $bod = BOD::findOrFail($id);
            $current_img_path = asset('images/bod'.$bod->img);
            if(file_exists($current_img_path)){
                unlink($current_img_path);
            }
            $bod->delete();
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            return $this->onError('Delete Board of Director Failed!', $exception->getMessage());
        }

        return $this->onSuccess('', 'Delete Board of Director Success!');
    }

    public function reorder($id){
        return null;
    }

}
