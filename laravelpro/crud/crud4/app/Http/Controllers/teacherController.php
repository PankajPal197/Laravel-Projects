<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
// use App\Models\teacherModel;
use App\Models\TeacherInfo;
use App\Models\teacherModel;

class teacherController extends Controller
{
    //
    public function Teacher(){
        $teacher = TeacherInfo::all();
        return view('teacher_info',['teachers'=>$teacher]);
    }
    public function storedata(){
        $teacher = TeacherInfo::all();
        return view('storedata',['teachers'=>$teacher]);
    }
    public function create(Request $req){
        $teacher = new TeacherInfo;
        $teacher->name = $req->name;
        $teacher->desingnation=$req->designation;
        $teacher->address=$req->address;
        $teacher->city=$req->city;
        $teacher->state=$req->state;
        $teacher->zip=$req->zip;
        $teacher->save();
        return redirect(route('/storedata'));
    }
}
