<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginform()
    {
        // dd('hello bav');
        return view('backend.adminLogin.login_form');
    }
    public function loginpost(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'email'=>'required',
            'password'=>'required'
        ]);
        if($validate->fails()){
            // return redirect()->back()->withErrors($validate);
            return redirect()->back()->withErrors($validate);
        }

        $filter = $request->only('email','password');
        $login = auth()->attempt($filter);
        if($login){
            return redirect()->route('home');
            // return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors($login);
        // dd($request->all());
    }
    public function logout(){
        auth()->logout();
        return redirect()->route('login.form');
    }
}
