<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Http\Request;

use App\Models\CSR;

class CSRController extends Controller
{
    use ApiHelpers;
    public function GetCSR(){
        try {
            $data = CSR::all();
        }catch(\Exception $exception){  
            return $this->onError("Can't Fetch CSR", $exception->getMessage());
        }
        
        return $this->onSuccess($data, '');
    }

    public function GetCSRById($id){
        try{
            $data = CSR::findOrFail($id);
        }catch(\Exception $exception){
            return $this->onError("Can't Fetch CSR", $exception->getMessage());
        }
        return $this->onSuccess($data, '');
    }    
}
