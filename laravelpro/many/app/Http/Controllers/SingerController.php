<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\singer;
use App\Models\song;
class SingerController extends Controller
{
    public function Add_Singer(){
        $singer = new Singer();
        $singer->name = "Dino james";
        $singer->save();

        $songsids = [4,3];
        $singer->songs()->attach($songsids);

    }





    // Get Singer Based on Song Ids
    public function Show_Singer($id){
        $singer = Song::find($id)->singers;
        $newData = $singer['songs'];
        foreach($newData as $item)
        {
            return $item->title;
        }
        return view('singer', ['songs' => $singer]);

    }

}
