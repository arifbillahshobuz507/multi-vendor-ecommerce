<?php

namespace App\Http\Controllers\UserLogin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{

 public function loginForm()
 {
  //login form blade file
  return view('backend.adminLogin.login_form');
  }
public function loginpost(Request $request)
 {
  // dd($request->all());
  // validate request
  // $validate = Validator::make($request->all(), [
  //   'gmail' => 'required',
  //   'password' => 'required'
  // ]);
  // if($validate->fails()) {
  //   return redirect()->back()->withErrors($validate);
  // }
  // login process
  $adminLogin = auth()->guard('admin');
  $credentials = $request->only('gmail', 'password');
  if($adminLogin->attempt($credentials)) {
    return redirect()->route('admin.dashboard');
  } else {
    return redirect()->back()->with('error', 'Invalid credentials');
  }
  // dd($credentials);
  // $admin = Admin::all();
  // dd($admin);
  // dd($adminLogin);


  // $adminLogin = auth()->guard('admin')->attempt($credentials);


  
 }



}
