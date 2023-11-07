<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
    public function list()
    {
        return view("backend.pages.category.category");
        // dd('hello');
    }
    public function form()
    {
        return view("backend.pages.category.form");
    }
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'category_name' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        } else {
            return redirect() -> route('category.list');
        }
        //   dd($request->all());
        Category::create([
            'category_name'=>$request->category_name,
            'image'=>$request->image,
            'descripton'=>$request->descripton
        ]);
    }
}
