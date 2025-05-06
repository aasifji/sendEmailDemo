<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use Illuminate\Support\Facades\Hash;

class customerController extends Controller
{
    public function add_customer(Request $request){
//         $request->validate([
//     'email' => 'required|email|unique:customers,email,' . $customer->id,
// ]);

        // return $request->input();
        $genderMap = ['Male' => 'M', 'Female' => 'F', 'Other' => 'O'];
        $customer = new customer();
        $customer->name = $request->customer_name;
        $customer->email = $request->email;
        $customer->gender = $genderMap[$request->gender] ?? null;
        $customer->address = $request->address;
        $customer->country = $request->country;
        $customer->city = $request->city;
        $customer->dob = $request->date_b;
        $customer->password = Hash::make($request->password);
        $customer->save();
        if($customer){
            return redirect('list');
        }else{
            echo "Customer data not found";
        }
    }

    function customer_list(){
         $customerdata = customer::all();
        return view('customer-list',['customer'=>$customerdata]);
    }

    function delete($id){
        $isDeleted = customer::destroy($id);
        if($isDeleted){
            return redirect('list');
        }
    }
}
