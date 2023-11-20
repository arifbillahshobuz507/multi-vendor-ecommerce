<?php

namespace App\Http\Controllers\backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class BrandsController extends Controller
{
    public function list()
    {
      $brands = Brand::paginate(3);
      return view("backend.pages.brands.list", compact('brands'));
    }
    public function form()
    {
      return view("backend.pages.brands.form");
    }
    public function stor(Request $request)
    {
      // dd($request->all());
      $validate = Validator::make($request->all(), [
        'brand_name' => 'required'
      ]);
      if ($validate->fails()) {
        return redirect()->back()->withErrors($validate);
      }
      // dd('recured successfully.');
      $fileName = null;
      if ($request->hasFile('image'))
      {
        $file = $request->file('image');
        $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();  
        $file->move("brands/image", $fileName);  
      }
      Brand::create([
        'name' => $request->brand_name,
        'image' => $fileName,  
        'description'=>$request->description
      ]);
      return redirect()->route('brand.list')->with('success','Brand Created Successfully');
    }
}
