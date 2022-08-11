<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class CategoryController extends Controller
{
    public function show_category($id)
    {
        $products=Product::where('category_id',$id)->get();

        return view('frontend.layouts.home', compact('products'));
    }
}
