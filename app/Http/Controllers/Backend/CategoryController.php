<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function list()
    {
        $categories=Category::all();
        return view('backend.category.category-list', compact('categories'));
    }


    public function form()
    {
        return view('backend.category.category-form');
    }

    public function store(Request $request )
    {
      // dd($request->all()) ;
      Category::create([
          'name'=>$request->category_name,
          'description'=>$request->category_description,
      ]);
      return redirect()->route('category.list');
    }
}
