<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function list()
    {
        $customers = Customer::paginate(5);
        // dd('hello');
        return view('backend.pages.customer.list',compact('customers'));
    }
    public function from()
    {
        // dd('hello');
        return view('backend.pages.customer.from');
    }
    public function store(Request $request)
    {
        // dd($customer->all());
        Customer::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'gmail' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password
        ]);
        return redirect()->route('customer.list');
    }
}
