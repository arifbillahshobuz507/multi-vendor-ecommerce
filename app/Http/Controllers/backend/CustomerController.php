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
        $customers = Customer::paginate(3);
        // dd($admins);
        return view("backend.pages.customer.list", compact('customers'));
    }

    public function from()
    {
        // dd('hello');
        return view('forntend.pages.customer.form');
    }
    public function store(Request $request)
    {
        //   dd($request->all());
        // Validate request data
        $validate = Validator::make($request->all(), [
            'gmail' => 'required',
            'phone' => 'required',
            'password' => 'required',
        ]);

        if ($validate->fails()) {
            notify()->error('Somthing is wrong');
            return redirect()->back()->withErrors('invalid user email or password');
        }

        // Hash the password beroe storing
        $hashedPassword = bcrypt($request->password);

        //Create Customer
        Customer::create([
            'gmail' => $request->gmail,
            'phone' => $request->phone,
            'password' => $hashedPassword,
            'role' => 'customer'
        ]);

        notify()->success('Account Create Susscess!');

        // Redirect ot the 'home' route
        return redirect()->route('home');
    }

    public function delete($id)
    {
        $customer = Customer::find($id);
        // dd($admins);
        // Check if the admin exists
        if ($customer) {
            //delete admin
            $customer->delete();

            //Notify about the success
            notify()->success('Customer delete success');

            //REdurect ti the 'customer.list' route
            return redirect()->route('customer.list');
        } else {
            notify()->error('Customer not found');

            return redirect()->route('customer.list');
        }
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        // dd($customer);
        if ($customer) {
            return view("backend.pages.Customer.edit", compact('customer'));
        }
    }


    // Update Customer code 
    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        // dd($customer);

        // dd($request->all());
        // Validate request data
        $validate = Validator::make($request->all(), [
            'gmail' => 'required',
            'phone' => 'required',
        ]);

        //Check validate
        if ($validate->fails()) {
            notify()->error('Somthing is wrong');

            return redirect()->back();
        } else {
            $customer->update([
                'gmail' => $request->gmail,
                'phone' => $request->phone,
            ]);

            notify()->success('Customer Update successfully.');
            return redirect()->route('customer.list');
        }
    }
    public function view($id)
    {
        $customer = Customer::find($id);
  
      if($customer)
      {
        return view("backend.pages.customer.view", compact('customer'));
      }
    }
}
