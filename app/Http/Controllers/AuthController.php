<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $data = User::where('name', $request->name)->firstOrFail();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                session(['berhasil_login' => true]);
                return redirect('/dashboard');
            }
            // return redirect('/')->with('message', 'Wrong Username Password ');
        }
        return redirect('/')->with('message', 'Wrong Username or Password ');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
