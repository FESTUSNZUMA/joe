<?php

namespace App\Http\Controllers;

use App\Artist;
use Illuminate\Http\Request;
use App\Song;
class musicController extends Controller
{
    //
    public function index(){

    	$allSongs = Song::all();
    	return view("music.index")->with($allSongs,"allSongs");
    }
}
