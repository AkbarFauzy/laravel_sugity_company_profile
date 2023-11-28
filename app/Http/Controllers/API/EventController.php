<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Http\Request;

use App\Models\Event;

class EventController extends Controller
{
    use ApiHelpers;
    public function GetEvents(){
        try {
            $data = Event::all();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch Events", $exception->getMessage());
        }
        
        return $this->onSuccess($data, '');
    }

    public function GetEventById($id){
        try{
            $data = Event::findOrFail($id);
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch Event", $exception->getMessage());
        }
        return $this->onSuccess($data, '');
    }    
}
