<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
                $originName = $image->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $req->file('img')->getClientOriginalExtension();
                $fileName = Str::slug($fileName, '_') . '_' . time() . '.' . $extension;
                $req->file('img')->move(public_path('images/brief-history/'), $fileName);
                $url = asset('images/brief-history/' . $fileName);
            }

            DB::beginTransaction();
            $history = History::create([
                'title' => $req->input('title'),
                'year' => $req->input('year'),
                'img' => $fileName,
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

            if($req->has('img')){
                $file = $req->file('img');
                $current_img_path = public_path('images/brief-history/'.$history->img);
                if (file_exists($current_img_path)) {
                    unlink($current_img_path);
                }

                $originName = $file->getClientOriginalName();
                $fileName = pathinfo($originName, PATHINFO_FILENAME);
                $extension = $file->getClientOriginalExtension();
                $fileName = Str::slug($fileName, '_') . '_' . time() . '.' . $extension;
                $file->move(public_path('images/brief-history/'), $fileName);

                $history->img = $fileName;
            }

            $history->update([
                'title' => $req->input('title'),
                'year' => $req->input('year'),
            ]);

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
