<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function list()
    {
      return view("backend.pages.brands.brand");
    }
    public function form()
    {
      return view("backend.pages.brands.form");
    }
    public function stor(Request $request)
    { 
      dd($request->all());
    }
}
