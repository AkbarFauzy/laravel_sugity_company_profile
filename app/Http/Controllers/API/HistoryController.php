<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\History;

class HistoryController extends Controller
{
    use ApiHelpers;
    public function GetHistory(){
        try {
            $history = History::all()->groupBy('year');
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch History", $exception->getMessage());
        }
        return $this->onSuccess($history, '');
    }

    public function GetAllHistory(){
        try {
            $history = History::all();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch History", $exception->getMessage());
        } 
        return $this->onSuccess($history, '');
    }

    public function GetHistoryById($id){
        try{
            $history = History::findOrFail($id);
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch History", $exception->getMessage());
        }
        return $this->onSuccess($history, '');
    }

    public function AddHistory(Request $req){
        try{
            $req->validate([
                'title' => 'required',
                'year' => 'required',
                'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if ($image = $req->file('img')) {
                $destinationPath = 'images/brief-history/';
                $historyImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $historyImage);
            }

            DB::beginTransaction();
            $history = History::create([
                'title' => $req->input('title'),
                'year' => $req->input('year'),
                'img' => $historyImage,
            ]);
            DB::commit();
        }catch(\Exception $exception){  
            DB::rollback();
            return $this->onError("Can't Add History", $exception->getMessage());
        }

        return $this->onSuccess($history, 'Add History Success!');
    }

    public function UpdateHistory(Request $req, $id){
        try{
            $req->validate([
                'title' => 'required',
                'year' => 'required',
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            DB::beginTransaction();
            $history = History::findOrFail($id);

            if($req->has('img') && $req->file('img') != null){
                $file = $req->file('img');
                $image_name = $file->getClientOriginalName();
            }else{
                $image_name = $history->img;
            }

            if($req->has('img') && $req->file('img') != null)
                $current_img_path = public_path('images/brief-history/'.$history->img);
                $history->update([
                    'img' => $image_name,
                ]);

            $history->update([
                'title' => $req->input('title'),
                'year' => $req->input('year'),
            ]);

            if($req->has('img') && $req->file('img') != null)
              if(file_exists($current_img_path)){
                unlink($current_img_path);
              }
            if($req->has('img') && $req->file('img') != null)
                $file->move(public_path('images/brief-history/'), $image_name);
            DB::commit();

        }
        catch(\Exception $exception){
            DB::rollback();
            return $this->onError("Can't Add History", $exception->getMessage());
        }

        return $this->onSuccess($history, 'Update History Success!');
    }

    public function DeleteHistory($id){
        try {
            DB::beginTransaction();
            $history = History::findOrFail($id);
            $current_img_path = asset('images/brief-history/'.$history->img);
            $history->delete();
            if(file_exists($current_img_path)){
                unlink($current_img_path);
            }
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollback();
            return $this->onError('Delete History Failed!', $exception->getMessage());
        }

        return $this->onSuccess('', 'Delete History Success!');

    }
}
