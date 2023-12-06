<?php

namespace App\Http\Controllers\backend;

use notify;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\Admin_profile;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{

  public function backendHomePage()
  {
    echo view("backend.home.index");
  }
  public function list()
  {
    $admins = Admin::paginate(3);
    // dd($admins);
    return view("backend.pages.admin.list", compact('admins'));
  }
  public function add_admin(Request $request)
  {       
    return view("backend.pages.admin.form");
  }
  public function store(Request $request)
  {    
      // dd($request->all());

    
      Admin::create([        
        'gmail' => $request->gmail,
        'phone' => $request->phone,
        'password' => $request->password,
        'role'=>'admin'
      ]);  
      notify()->success('Laravel Notify is awesome!');
    return redirect()->route('admin');
  }





















  
  public function profile()
  {
    $admins = Admin::all();
    $admin_profile = Admin_profile::all();
    // dd($admins);
    return view("backend.pages.admin_profile.profile",compact('admins'));
  }

  public function edit_profile()
  {
    // $admins = Admin::find($id);
    return view('backend.pages.admin_profile.edit',/*  compact('admins') */);
  }
  public function update(Request $request)
  {

    // dd($request->all());
    $validate = Validator::make($request->all(), [
      'first_name' => 'required',
      'last_name' => 'required',
      'gmail' => 'required',
      'phone' => 'required',
      'birth_day' => 'required',
      'address' => 'required',
      'gender' => 'required'     
    ]);
    if ($validate->fails()) {
      return redirect()->back()->withErrors($validate);
    }
    // dd('hello');
    $fileName = null;
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $fileName = date('Ymdhis') . '.' . $file->getClientOriginalExtension();
      // $destination = "uploads";
      // $file->move($destination, $fileName);

      $file->move("uploads", $fileName);
    }
    // dd($request->all());
    Admin::create([
      'first_name' => $request->first_name,
      'last_name' => $request->last_name,
      'gmail' => $request->gmail,
      'phone' => $request->phone,
      'password' => $request->password,
      'birth_day' => $request->birth_day,
      'address' => $request->address,
      'role' => $request->role,
      'image' => $fileName,
      'gender' => $request->gender
    ]);
    return redirect()->route('admin.list');
  }







































  public function form()
  {
    return view("backend.pages.admin.form");
  }
  

  
}
