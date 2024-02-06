<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    //
    public function Index()
    {
        return view('/index');
    }
    public function StoreData()
    {
        return view('/store');
    }
    public function getdata(Request $req){
        $data = $req->input('name');
        $req->session()->flash('name', $data);
        return redirect('store');
    }
    public function fileupload(Request $req)
    {
        $data=$req->('file')->Store('img');
        return view('login');
    }
}
