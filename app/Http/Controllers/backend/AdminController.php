<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
  public function forntendHomePage()
  {
    echo view("forntend.home.index");
  }
  public function backendHomePage()
  {
    echo view("backend.home.index");
  }
  public function list()
  {
    $admins = Admin::paginate(20);
    return view("backend.pages.admin.list",compact('admins'));
  }
  public function form()
  {
    return view("backend.pages.admin.form");
  }
  public function store(Request $request)
  {

    // dd($request->all());
    $validate = Validator::make($request->all(), [
      'first_name' => 'required',
      'last_name' => 'required',
      'gmail' => 'required',
      'phone' => 'required',
      'birth_day' => 'required',
      'address' => 'required',
      'gender' => 'required',
      'password' => 'required',
    ]);
    if ($validate->fails()) {
      return redirect()->back()->withErrors($validate);
    }
    // dd('hello');
    $fileName = null;
    if ($request->hasFile('image'))
    {
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
      'image' => $fileName,
      'gender' => $request->gender
    ]);
    return redirect()->route('admin.list');
  }
}
