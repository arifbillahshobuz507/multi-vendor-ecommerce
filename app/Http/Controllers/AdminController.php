<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
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
    $admins = Admin::paginate(5);
    return view("backend.pages.admin.list", compact('admins'));
  }
  public function form()
  {
    return view("backend.pages.admin.form");
  }
 public function store(Request $request){

  $validate = Validator::make($request->all(),[
    'first_name'=>'required',
    'last_name'=>'required',
    'gmail'=>'required',
    'phone'=>'required|numeric|min:10',
    'password'=>'required',
]);
if($validate->fails())
{
// notify()->error($validate->getMessageBag());
// return redirect()->back();
return redirect()->back()->withErrors($validate);
}

  Admin::create([
    'first_name'=>$request->first_name,
    'last_name'=>$request->last_name,
    'gmail'=>$request->email,
    'phone'=>$request->phone,
    'password'=>$request->password
]);
return redirect()->route('admin.list');


 }





}
