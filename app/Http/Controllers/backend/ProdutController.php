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
        $products = Product::with(['category', 'subcategory', 'brand'])->paginate(2);
        //        dd($products);
        return view("backend.pages.products.list", compact('products'));
    }
    public function form()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        //        dd($categories);
        return view("backend.pages.products.form", compact(['categories', 'subcategories', 'brands']));
    }
    public function store(Request $request)
    {
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
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
            $file->move("product/image", $fileName);
        }
        Product::create([
            'name' => $request->product_name,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'brand_id' => $request->brand_id,
            'release_data' => $request->release_data,
            'quantity' => $request->quantity,
            'price' => $request->price,
            'image' => $fileName,
            'descripton' => $request->descripton
        ]);
        return redirect()->route('product.list');
    }
    public function delete($id)
    {
        $products = Product::find($id);
        // dd($products);
        if ($products) {
            $products->delete();
            return redirect()->route('product.list');
        }
    }
    public function edit($id)
    {
        // dd('welcome edite file');
        $categories = Category::all();
        $subcategories = SubCategory::all();
        $brands = Brand::all();
        $product = Product::find($id);
        // dd([ $categories ,$subcategories,$brands,$products]);
        return view('backend.pages.products.edit', compact(['categories', 'subcategories', 'brands', 'product']));
    }
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if ($product){


            $fileName=$product->image;
            if($request->hasFile('image'))
            {
                $file=$request->file('image');
                $fileName=date('Ymdhis').'.'.$file->getClientOriginalExtension();

                $file->storeAs("product/image",$fileName);

            }
            $product->update([
                'name' => $request->product_name,
                'category_id' => $request->category_id,
                'subcategory_id' => $request->subcategory_id,
                'brand_id' => $request->brand_id,
                'release_data' => $request->release_data,
                'quantity' => $request->quantity,
                'price' => $request->price,
                'image'=>$fileName,
                'descripton' => $request->descripton

            ]);
        return redirect()->route('product.list');
        }
//        dd($product);
//        $product->name = $request->get('product_name');
//        $product->category_id = $request->get('category_id');
//        $product->subcategory_id = $request->get('subcategory_id');
//        $product->brand_id = $request->get('brand_id');
//        $product->release_data = $request->get('release_data');
//        $product->quantity = $request->get('quantity');
//        $product->price = $request->get('price');
//        $product->image = $request->get('image');
//        $product->descripton = $request->get('descripton');
//        $product->save();
//        return redirect()->route('product.list');
    }

}
