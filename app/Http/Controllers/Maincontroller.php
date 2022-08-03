<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Maincontroller extends Controller
{
    public function index()
    {
       
        return view('backend.template.master');
    } 

    public function view()
    {
        return view('backend.template.dashboard');
    }

    public function login()
    {
        return view('backend.login2');
    }

    public function doLogin(Request $request)
    {
        $check = Auth::attempt([
           'email'=>$request->email,
           'password'=>$request->password,
        ]);
        // dd($check);

        return redirect()->route('admin');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}
