<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test1(){
       return view("welcome");
    }

    public function chitariKorteci(){
        return view('welcome');
    }

    public function chitariDhanda(){
        return view('forntend.chitarWebsiteForMe');
    }

    public function amiHe(){
        return 'ami He';
    }
}
