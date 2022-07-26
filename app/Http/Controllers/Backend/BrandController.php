<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;

class BrandController extends Controller
{
    public function list()
    {
        $brands=Brand::all();
        return view('backend.brand.brand-list',compact ('brands'));
    }

    public function form()
    {
        return view('backend.brand.brand-form');
    }  

    public function store(Request $request)
    {
       
        Brand::create([
            'name'=>$request->brand_name,
            'description'=>$request->brand_description,
        
        ]);

        return redirect()->route('brand.list');
       
    }
}
