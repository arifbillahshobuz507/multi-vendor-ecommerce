<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function list()
  {
    return view("backend.pages.payments.payment");
  }
    public function paymentList()
  {
    return view("backend.pages.payments.list");
  } 
  public function see(Request $request){
    dd($request->all());
   }
}
