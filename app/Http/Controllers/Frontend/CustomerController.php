<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function registration()
    {
        $categories=Category::all();
        return view('frontend.layouts.registration', compact('categories'));
    }

    public function do_registration(Request $request )
    {
       User::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt($request->password),
       ]) ;
       return redirect()->route('home');
    }

    public function do_login(Request $request)
    {
        $check=Auth::attempt([
            'email'=>$request->email,
            'password'=>bcrypt($request->password), 
        ]);
        return redirect()->route('home');
    }

    public function do_logout()
    {
        Auth::logout();

        return redirect()->route('home');
    }
}

