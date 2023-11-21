<?php

namespace App\Http\Controllers\backend;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function list()
    {
        $customers = Customer::paginate(5);
        // dd('hello');
        return view('backend.pages.customer.list', compact('customers'));
    }
    public function from()
    {
        // dd('hello');
        return view('backend.pages.customer.from');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validate = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'gmail' => 'required',
            'phone' => 'required',
            'date_of_birth' => 'required',
            'password' => 'required',
        ]);
        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }
        // dd('hello');
        $fileName = null;
        if ($request->hasFile('image')) {
            $filepoint = $request->file('image');
            $fileName = date('Ymdhis') . '.' . $filepoint->getClientOriginalExtension();
            // $destination = "uploads";
            // $file->move($destination, $fileName);
            $filepoint->move("customer/image", $fileName);
        }
        // dd($request->all());
        Customer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'image' => $fileName,
            'gmail' => $request->gmail,
            'phone' => $request->phone,
            'password' => $request->password,
            'date_of_birth' => $request->date_of_birth,
            'address' => $request->address,
            'gender' => $request->gender,
            'role' => 'customer'
        ]);
        return redirect()->route('customer.list');
    }
}
