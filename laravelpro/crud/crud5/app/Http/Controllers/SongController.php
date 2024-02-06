<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\song;
use App\Models\singer;
class SongController extends Controller
{
    public function Add_Songs(){
        $songs = new song();
        $songs->title = "Thodi 'jagah ";
        $songs->save();

    }
}
