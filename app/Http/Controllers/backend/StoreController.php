<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

class StoreController extends Controller
{
    public function list(){
        // dd('ss');
        return view('backend.pages.store.list');
    }
}
