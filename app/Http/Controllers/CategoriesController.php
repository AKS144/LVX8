<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
   
    public function index()
    {
        $categories = Category::orderby('created_at','DESC')->get();
        return view('categories.index',compact('categories'));
    }

   
    public function create()
    {
        return view('categories.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:2|max:50|unique:categories',
        ]);

        $categories = new Category();
        $categories->name = $request->name;// dd($categories);
        $categories->save();

        flash('Saved')->success();
        return back();

    }

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $categories = Category::findOrFail($id);
        return view('categories.edit',compact('categories'));
    }

   
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required|min:2|max:50|unique:categories,name,'.$id,
        ]);

        $categories = Category::findOrFail($id);
        $categories->name = $request->name;// dd($categories);
        $categories->save();

        flash('Update')->success();
        return redirect()->route('categories.index');
    }

   
    public function destroy($id)
    {
        $categories = Category::findOrFail($id);
        $categories->delete();
        return redirect()->route('categories.index');
    }
}
