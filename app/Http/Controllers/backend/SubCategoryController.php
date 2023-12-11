<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Sub_category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    public function list()
    {
        // data face to sub_category
        $subcategories = Sub_category::with('category')->paginate(2);
        // dd($subcategories);
        return view("backend.pages.subcategory.list", compact('subcategories'));
    }

    public function form()
    {
        //data face to Category
        $categories = Category::all();
        //dd($categories->id);
        return view("backend.pages.subcategory.form", compact('categories'));
    }

    public function store(Request $request)
    {
        //dd($request->all());
        // make validate 
        $validate = Validator::make($request->all(), [
            'sub_category_name' => 'required',
            'category_id' => 'required'
        ]);
        //check validate
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        //dd($request->all());
        //image file unique name
        $fileName = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdhis') . "." . $file->getClientOriginalExtension();
            $file->storeAs('/subCategory/image', $fileName);
        }
        //dd($request->all());
        // sub_category data store 
        Sub_category::create([
            'category_id' => $request->category_id,
            'name' => $request->sub_category_name,
            'image' => $fileName,
            'descripton' => $request->descripton
        ]);
        //dd($request->all());
        // redirect to 'subcategory.list'
        return redirect()->route('subcategory.list');
    }

    public function delete($id)
    {
        $sub_categories = Sub_category::find($id);
        // dd($admins);
        // Check if the sub_category exists
        if ($sub_categories) {
            //delete admin
            $sub_categories->delete();

            //Notify about the success
            notify()->success('Sub Category delete success');

            //REdurect to the 'category.list' route
            return redirect()->route('subcategory.list');
        } else {

            notify()->error('Sub Category not found');

            //REdurect to the 'subcategory.list' route
            return redirect()->route('subcategory.list');
        }
    }

    public function edit($id)
    {

        $sub_categories = Sub_category::find($id);
        // dd($categories);

        // Check if the sub_category exists
        if ($sub_categories) {
            return view("backend.pages.subcategory.edit", compact('sub_categories'));
        }
    }


    // Update Customer code 
    public function update(Request $request, $id)
    {
        // dd($request->all());


        $sub_categories = Sub_category::find($id);

        // Validate request data
        $validate = Validator::make($request->all(), [
            'name' => 'required'
        ]);

        //Check validate
        if ($validate->fails()) {  
            return redirect()->back()->withErrors($validate);           
        }else{

            // dd($request->all());
        $fileName = $sub_categories->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdhis'). ".". $file->getClientOriginalName();
            $file->storeAs('/subCategory/image', $fileName);
        }
        if($sub_categories){
            $sub_categories->Update([
                'name'=>$request->name,
                'image'=>$fileName,
                'descripton'=>$request->descripton
            ]);
        }        
        //dd($request->all());
        notify()->success('Sub Category Update Successfully.');
        return redirect()->route('subcategory.list');
        }     
    }
    public function view($id)
    {
        $sub_categories = Sub_category::find($id);
  
      if($sub_categories)
      {
        return view("backend.pages.subcategory.view", compact('sub_categories'));
      }
    }

}
