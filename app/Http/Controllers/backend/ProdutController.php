<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdutController extends Controller
{
    public function list()
    {
        $products = Product::with(['category','subcategory','brand'])->paginate(2);
//        dd($products);
      return view("backend.pages.products.list", compact('products'));
    }
    public function form()
    {
        $categories = Category::all();
        $subcategories = SubCategory ::all();
        $brands = Brand::all();
//        dd($categories);
      return view("backend.pages.products.form", compact(['categories','subcategories','brands']));
    }
    public function store(Request $request){
//      dd($request->all());
        $validate = Validator::make($request->all(), [
            'product_name' => 'required',
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'brand_id' => 'required',
            'release_data' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
//         dd($validate);
        $fileName = null;
        if ($request->hasFile('image'))
        {
            $file = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->move("product/image", $fileName);

        }
        Product::create([
            'name'=>$request->product_name,
            'category_id'=>$request->category_id,
            'subcategory_id'=>$request->subcategory_id,
            'brand_id'=>$request->brand_id,
            'release_data'=>$request->release_data,
            'quantity'=>$request->quantity,
            'price'=>$request->price,
            'image'=>$fileName,
            'descripton'=>$request->descripton
        ]);
        return redirect()->route('product.list');
     }
}
