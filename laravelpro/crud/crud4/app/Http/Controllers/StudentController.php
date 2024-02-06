<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfo;

class StudentController extends Controller
{
    //
    public function Student(){
        return view('student_info');
    }
}
