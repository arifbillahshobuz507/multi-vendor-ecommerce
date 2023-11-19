<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function forntendHomePage()
    {
        $category = Category::all();
//        dd($category);
        echo view("forntend.home.index", compact('category'));
    }
}
