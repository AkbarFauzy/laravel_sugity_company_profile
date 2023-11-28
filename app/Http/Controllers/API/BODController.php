<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Http\Request;

use App\Models\BOD;

class BODController extends Controller
{
    use ApiHelpers;


    public function GetPresidentDirector(){
        try {
            $data = BOD::where('position', 'President Director')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch BOD", $exception->getMessage());
        }
        
        return $this->onSuccess($data, '');
    }


    public function GetExecutiveVicePresident(){
        try {
            $data = BOD::where('position', 'Executive Vice President')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch BOD", $exception->getMessage());
        }
        
        return $this->onSuccess($data, '');
    }
    

    public function GetDirectors(){
        try {
            $data = BOD::where('position', 'Director')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch BOD", $exception->getMessage());
        }
        
        return $this->onSuccess($data, '');
    }

    public function GetCommissioners(){
        try {
            $data = BOD::where('position', 'Commisioner')->get();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch BOD", $exception->getMessage());
        }
        
        return $this->onSuccess($data, '');
    }

}
