<?php

namespace App\Http\Controllers;
use App\Song;
use Illuminate\Http\Request;

class SongController extends Controller
{
    public function songs(){
    	$songs = Song::all();
    	//$songs_path = $songs->id;
    	return ($songs);

    }
    public function allSongs(){
    	$songs = Song::all();
    	
    	return ($songs);
    }
    public function getSong($id){

    	$songId = $id;
    	$song_details = Song::where('id', $songId)->first();
    	return ($song_details);

    }
}

