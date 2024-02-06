<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\staff;
class staffController extends Controller
{
    //
    public function staff()
    {
        return staff::find(1)->usersdata;
    }
}
