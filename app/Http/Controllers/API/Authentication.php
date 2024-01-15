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
                $token = Auth::user()->createToken('auth-token')->plainTextToken;
                return response()->json(['token' => $token]);
            }
            // $data = User::where('email', strtolower($req->input('inputEmail')))->first();

            // if(!$data || !Hash::check($req->input('inputPassword'), $data->password)){
            //     throw ValidationException::withMessages(['user' => 'Username atau Password Salah!']);
            // }

            
        } catch (\Exception $exception) {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }

    }

    public function logout(Request $req)
    {
        try {
            Auth::logout();

            $req->session()->invalidate();
            $req->session()->regenerateToken();
    
            return redirect('/');

        } catch (\Exception $exception) {
            return $this->onError('User Logout Failed!', $exception->getMessage());
        }
        return $this->onSuccess('', 'User Logout Success!');
    }
}
