<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class Authentication extends Controller
{

    use ApiHelpers;

    public function login(Request $req)
    {
        try {
            $credentials = $req->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                $token = $user->createToken('userToken')->plainTextToken;
                $user->save();   
            }
            // $data = User::where('email', strtolower($req->input('inputEmail')))->first();

            // if(!$data || !Hash::check($req->input('inputPassword'), $data->password)){
            //     throw ValidationException::withMessages(['user' => 'Username atau Password Salah!']);
            // }

            
        } catch (\Exception $exception) {
            return $this->onError('User Login Failed!', $exception->getMessage());
        }
        return $this->onSuccess([
            'user' => $user,
            'token' => $token
        ], 'User Login Success!');
    }

    public function logout(Request $req)
    {
        try {
            auth('sanctum')->user()->currentAccessToken()->delete();
        } catch (\Exception $exception) {
            return $this->onError('User Logout Failed!', $exception->getMessage());
        }
        return $this->onSuccess('', 'User Logout Success!');
    }
}
