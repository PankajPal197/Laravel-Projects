<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Mobile;
class CustomerController extends Controller
{
    public function add_customer(){
        $mobile = new Mobile();
        $mobile-> model = 'LG101';

        $customer= new Customer();
        $customer->name = 'Raja Kumar';
        $customer->email = 'rajkumar@gmail.com';
        $customer->save();
        $customer->mobile()->save($mobile);
    }
    public function Show_Mobile($id){
        $mobile = Customer::find($id)->mobile;
        // return $mobile;
        return view('mobile', ['mobile' => $mobile]);
    }
    public function Form(){
        return "hello";
    }
}
