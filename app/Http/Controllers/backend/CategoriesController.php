<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    // Category
    public function category_list()
    {
        $categories = Category::paginate(15);
//        dd($categories);

        return view("backend.pages.category.category",compact('categories'));
        // dd('hello');
    }
    public function form()
    {
        return view("backend.pages.category.form");
    }
    public function store (Request $request)
    {
        //dd($request->all());
        $validate = Validator::make($request->all(), [
            'category_name' => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        //dd($request->all());
        $fileName = null;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = date('Ymdhis'). ".". $file->getClientOriginalName();
            $file->storeAs('/category/image', $fileName);
        }
        Category::create([
            'category_name'=>$request->category_name,
            'image'=>$fileName,
            'descripton'=>$request->descripton
        ]);
        //dd($request->all());
        return redirect()->route('category.list');
    }

    // SubCategory
    public function subcategory_list()
    {
        //dd('hello');
        return view("backend.pages.subcategory.list");
    }
    public function subcategory_from()
    {
//        dd('hello');
        return view("backend.pages.subcategory.form");
    }
    public function subcategory_store (Request $request)
    {
        //dd($request->all());
        $validate = Validator::make($request->all(), [
            'sub_category_name' => 'required',
            'category_id' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        //dd($request->all());
        $fileName = null;
        if ($request->hasFile('image')){
            $file = $request->file('image');
            $fileName = date('Ymdhis'). ".". $file->getClientOriginalName();
            $file->storeAs('/subCategory/image', $fileName);
        }
//        dd($request->all());
        Category::create([
            'sub_category_name'=>$request->sub_category_name,
            'image'=>$fileName,
            'descripton'=>$request->descripton
        ]);
        //dd($request->all());
        return redirect()->route('category.list');
    }
}
