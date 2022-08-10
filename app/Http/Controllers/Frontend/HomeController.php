<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;

use Illuminate\Http\Request;


class HomeController extends Controller
{


  
    public function home()
    {
        $categories=Category::all();
       
      return view('frontend.layouts.home',compact('categories'));
    }


    public function search(Request $request)
    {
      $categories=Category::all();
      // dd($request->search_product);

    $products=Product::where('product_name','like','%'.$request->search_product.'%')->get();
    // dd($products);

    return view('frontend.layouts.search-view', compact('products','categories'));
    }

}


