<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
        $customer = new Customer;
        $url = url('/customer');
        $title = "Customer Registration"; 
        $data = compact('url','title','customer');
        return view('customer')->with($data);
    } 

    public function store(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password',
                'country' => 'required',
                'state' => 'required',
                'address' => 'required',
            ]);
        // echo "<pre>";
        // print_r($request->all());

        $customer = new Customer;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = $request['password'];
        $customer->confirm_password = $request['confirm_password'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('/customer/view');
    }

    public function view(){
        $customers = Customer::all();
        // echo "<pre>";
        // print_r($customer);
        // echo "</pre>";
        // die;
        $data = compact('customers');
        return view('customer-view')->with($data);
    }

    public function delete($id){
        $customer = Customer::find($id);
        if(!is_null($customer)){
            $customer->delete();
        }
        // echo "<pre>";
        // print_r($customer);
        return redirect('customer/view')->with('message','Data Deleted successfully');
        // return redirect()->back();
    }

    public function edit($id){
        $customer = Customer::find($id);
        if(is_null($customer)){
            return redirect('customer/view');
        }else{
            $url = url('/customer/update')."/".$id;
            $title = "Update Customer";
            $data = compact('customer','url','title');
            return view('customer')->with($data);
        }
        // echo "<pre>";
        // print_r($customer);
        
    }

    public function update($id, Request $request){
        $customer = Customer::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->country = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->gender = $request['gender'];
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('/customer/view')->with('message','Data Updated successfully');;
    }
}
