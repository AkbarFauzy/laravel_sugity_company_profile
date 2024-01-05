<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Session;

class LoginController extends Controller
{
    use ApiHelpers;

    public function view(){
        return view('admin/login');
    }

    public function actionLogin(Request $request){
        $response = Http::post(env('API_DOMAIN').'/api/auth/login', $request);
        
        if(json_decode($response->body())->success){
          $data = json_decode($response->body())->data;
          Session::put('token', $data->token);
          Session::put('user', $data->user);
          dd(json_decode($response->body()));
        }
        return redirect()->intended('/admin/dashboard');
      }

    public function actionLogout(){
        $response = Http::withToken(Session::get('token'))->post(env('API_DOMAIN').'/api/auth/logout', []);
        Session::flush();
        return redirect()->intended('/');;
    }

}
