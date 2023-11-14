<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
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
//        dd($request->all());
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
            $fileName = date('Ymdhis'). ".".$file->getClientOriginalExtension();
            $file->storeAs('/subCategory/image', $fileName);
        }
//        dd($request->all());
             SubCategory::create([
            'sub_category_name'=>$request->sub_category_name,
            'image'=>$fileName,
            'category_id'=>$request->category_id,
            'descripton'=>$request->descripton
             ]);
        dd($request->all());
        return redirect()->route('category.list');
    }
}
