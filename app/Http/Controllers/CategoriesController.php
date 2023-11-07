<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function list()
    {
      return view("backend.pages.category.category");
    }
    public function form()
    {
      return view("backend.pages.category.form");
    }
    public function store(Request $request){
      dd($request->all());
     }
}
