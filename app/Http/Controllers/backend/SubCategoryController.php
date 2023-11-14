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
        $subcategories = SubCategory::paginate(3);
//        dd($subcategories);
        return view("backend.pages.subcategory.list", compact('subcategories'));
    }
    public function subcategory_from()
    {
        $categories = Category::all();
//        dd($categories->id);
        return view("backend.pages.subcategory.form", compact('categories'));
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
//        dd($request->all());
        return redirect()->route('subcategory.list');
    }
}
