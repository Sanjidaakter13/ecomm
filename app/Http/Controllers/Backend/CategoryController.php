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

    public function delete($id)
    {
     // variable=model name::to find something we use find method
        $category=Category::find($id);
        $category->delete();
        return redirect()->back();

    //  Category::where('id',$id)->first(); [another way]
    }

    public function view($id)
    {
        $category=Category::find($id);
      return view('backend.category.view',compact('category'))  ;
    }

    public function edit($id)
    {
        $category=Category::find($id);
        return view('backend.category.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category=Category::find($id);
        $category->update([
            'name'=>$request->name,
            'status'=>$request->status,
            'description'=>$request->description,
        ]);

        return redirect()->route('category.list');

    }
}
