<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\singer;
use App\Models\song;

class SingerController extends Controller
{
    public function Add_Singer()
    {
        $singers = new singer();
        $singers->name = 'Arjit Singh';
        $singers->save();

    }
}
