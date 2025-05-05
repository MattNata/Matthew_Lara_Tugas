<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function login(){
        return view ('auth/login');
    }

    public function loginProses(request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required|min:6', 

        ],[
            'email.required' => 'Email tidak boleh kosong!',
            'password.required' => 'Password tidak boleh kosong!',
            'password.min' => 'Password minimal 6 karakter!',
        ]);

$data = array(
    'email' => $request->email,
    'password' => $request->password,

);

    if (Auth::attempt($data)) {
        return redirect()->route('dashboard')->with('success','Anda Berhasil Login');
        } else {
            return redirect()->back()->with('error', 'Email/Password Salah');
            }
    }
    public function logout(){
        Auth::logout();

        return redirect()->route('login')->with('success','Anda Berhasil Logout');
    }

}
