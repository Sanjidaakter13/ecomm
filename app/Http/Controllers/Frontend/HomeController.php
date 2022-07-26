<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use Illuminate\Http\Request;


class HomeController extends Controller
{


    public function home()
    {
       
        return view('frontend.master');
    }

    public function view_home()
    {
        $categories=Category::all();
        $products=Product::all();
        $brands=Brand::all();
        
      return view('frontend.template.home-view',compact('categories','products','brands'));
    }
}
