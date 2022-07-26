<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;


class ProductController extends Controller
{
    public function list()
    {
        //variable= Model name::what we want to show
        $productdata= Product::with('category')->OrderBy('id','desc')->paginate(2);
        
        return view ('backend.product.list',compact('productdata')) ;
    }

    public function form()
    {
        $categories = Category::all();
        return view('backend.product.form', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            //input field name=> validation rule
            'name'=>'required',
            'price'=>'required|integer|min:10',
            'quantity'=>'required|integer|min:1',
            'category'=> 'required',
        ]);
    //    dd($request->all());
        Product::create([
        //migration column name => blade input field name
        'product_name' => $request->name,
        'product_price'=>$request->price,
        'product_quantity'=>$request->quantity,
        'product_description'=>$request->description,
        //After adding category to product table
        'category_id' => $request->category,
        ]);
        return redirect()->route('product.list');

    }
}
