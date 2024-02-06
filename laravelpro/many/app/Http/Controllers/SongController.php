<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\singer;
use App\Models\song;
class SongController extends Controller
{
    public function Add_Song(){
        $song = new Song();
        $song->title = "ABCD";
        $song->save();
    }
    public function Show_Song($id){
        $song = Singer::all();
        // return $song;
        $song = Singer::find($id)->songs;
        $song = Singer::with('songs')->find($id);
        return view('singer',['data'=>$song]);
    }
}
