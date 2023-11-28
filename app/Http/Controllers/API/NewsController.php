<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Http\Request;

use App\Models\News;

class NewsController extends Controller
{
    use ApiHelpers;
    public function GetNews(){
        try {
            $data = News::all();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch News", $exception->getMessage());
        } 
        return $this->onSuccess($data, '');
    }

    public function GetNewsById($id){
        try{
            $data = News::findOrFail($id);
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch News", $exception->getMessage());
        }
        return $this->onSuccess($data, '');
    }
    
    public function GetLatestNews(){
        try {
            $data = News::orderBy('created_at', 'DESC')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch News", $exception->getMessage());
        }
        return $this->onSuccess($data, '');
    }
}
