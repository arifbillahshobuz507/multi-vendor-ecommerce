<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutController extends Controller
{
    public function list()
    {
      return view("backend.pages.products.products");
    }
    public function form()
    {
      return view("backend.pages.products.form");
    }
    public function store(Request $request){
      dd($request->all());
     }
}
