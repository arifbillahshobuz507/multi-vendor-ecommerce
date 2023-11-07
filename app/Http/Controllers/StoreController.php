<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function list(){
        // dd('ss');
        return view('backend.pages.store.list');
    }
}
