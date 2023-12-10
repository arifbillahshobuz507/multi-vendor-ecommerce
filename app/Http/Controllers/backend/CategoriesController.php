<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriesController extends Controller
{
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
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdhis'). ".". $file->getClientOriginalName();
            $file->storeAs('/category/image', $fileName);
        }
        Category::create([
            'name'=>$request->category_name,
            'image'=>$fileName,
            'descripton'=>$request->descripton
        ]);
        //dd($request->all());
        return redirect()->route('category.list');
    }

    public function delete($id)
    {
        $categories = Category::find($id);
        // dd($admins);
        // Check if the admin exists
        if ($categories) {
            //delete admin
            $categories->delete();

            //Notify about the success
            notify()->success('Category delete success');

            //REdurect ti the 'category.list' route
            return redirect()->route('category.list');
        } else {
            notify()->error('Category not found');
            return redirect()->route('category.list');
        }
    }

    public function edit($id)
    {
        $categories = Category::find($id);
        // dd($categories);
        if ($categories) {
            return view("backend.pages.category.edit", compact('categories'));
        }
    }


    // Update Customer code 
    public function update(Request $request, $id)
    {

        $categories = Category::find($id);

        // Validate request data
        $validate = Validator::make($request->all(), [
            'category_name' => 'required'
        ]);

        //Check validate
        if ($validate->fails()) {  
            return redirect()->back()->withErrors($validate);           
        }else{

            //dd($request->all());
        $fileName = $categories->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdhis'). ".". $file->getClientOriginalName();
            $file->storeAs('/category/image', $fileName);
        }
        if($categories){
            $categories->Update([
                'name'=>$request->category_name,
                'image'=>$fileName,
                'descripton'=>$request->descripton
            ]);
        }        
        //dd($request->all());
        notify()->success('Category Update Successfully.');
        return redirect()->route('category.list');
        }     
    }
    public function view($id)
    {
        $categories = Category::find($id);
  
      if($categories)
      {
        return view("backend.pages.category.view", compact('categories'));
      }
    }
}
