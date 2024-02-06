<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\EmployeeModel;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function create(Request $req)
    {
        $data = new EmployeeModel();
        $data->name = $req->name;
        $data->city = $req->city;
        $data->marks = $req->marks;
        $data->save();
        $data = EmployeeModel::all();
        // return view('display',['xyz'=>$data]);
        return view('store',['xyz'=>$data]);
    }
    public function Edit($id){
        $data = EmployeeModel::find($id);
        return view('/edit', ['data'=>$data]);

    }
    public function Update(Request $request)
    {
        $data = EmployeeModel::find($request->id);
        $data->name = $request->name;
        $data->city = $request->city;
        $data->marks = $request->marks;
        $data->save();
        $data = EmployeeModel::all();
        return view('/store',['xyz'=>$data]);
    }
    public function destroy($id)
    {
        $data=EmployeeModel::find($id);
        $data->delete();
        $data = EmployeeModel::all();

        // return view('');
        return view('/store',['xyz'=>$data]);

    }

    // public function display(Request $req){
    //     $data = EmployeeModel::all();
    //     return view('display',['xyz'=>$data]);
    // }
}
