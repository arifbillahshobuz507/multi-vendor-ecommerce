<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RivewController extends Controller
{
    public function list()
    {
      return view("backend.pages.rivews.rivew");
    }
    public function rivewList()
    {
      return view("backend.pages.rivews.list");
    }
    public function see(Request $request){
      dd($request->all());
     }
}
