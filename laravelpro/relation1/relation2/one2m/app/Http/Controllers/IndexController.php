<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        return Company::with('employee')->get();
    }
}
