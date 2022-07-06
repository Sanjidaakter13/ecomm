<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function master()
    {
        return view('master');
    } 

    public function view()
    {
        return view('template.dashboard');
    }
}
