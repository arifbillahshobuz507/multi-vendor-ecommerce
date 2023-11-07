<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuplaireController extends Controller
{
    public function list()
    {
      return view("backend.pages.suplaiers.shop");
    }
    public function form()
    {
      return view("backend.pages.suplaiers.form");
    }
    public function store(Request $request){
      dd($request->all());
     }
}
