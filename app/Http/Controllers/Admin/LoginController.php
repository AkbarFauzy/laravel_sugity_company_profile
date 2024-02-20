<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Library\ApiHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Auth;
use Session;

class LoginController extends Controller
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
                return redirect()->route('admin/dashboard')->with('token', $token);
            }

        } catch (\Exception $exception) {
            return redirect()->route('admin.dashboard');
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
          return redirect()->route('admin/dashboard');
        }

        return redirect()->route('/');
    }

}
