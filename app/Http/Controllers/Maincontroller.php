<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Maincontroller extends Controller
{
    public function index()
    {
       
        return view('master');
    } 

    public function view()
    {
        return view('template.dashboard');
    }

    public function login()
    {
        return view('backend.login');
    }

    public function doLogin(Request $request)
    {
        Auth::attempt([
           'email'=>$request->email,
           'password'=>$request->password,
        ]);

        return redirect()->route('admin');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
