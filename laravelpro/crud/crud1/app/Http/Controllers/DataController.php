<?php

namespace App\Http\Controllers;

use App\Models\MemberModel;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function getCompany()
    {
        return MemberModel::with('getCompany')->get();
    }
}
