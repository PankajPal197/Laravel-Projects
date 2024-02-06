<?php

namespace App\Http\Controllers;

use App\Models\onboard;
use Illuminate\Http\Request;

class PhoneAuthController extends Controller
{
    public function index(){
        return view('welcome');
      }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'phone' => 'required|numeric|unique:onboards',
            'city'=>'required',
        ]);
        onboard::create($request->post());
        return redirect()->back()->with('success','Onboarding Detail Successful');
    }
}
