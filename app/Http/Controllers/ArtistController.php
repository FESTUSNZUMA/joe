<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Song;

class ArtistController extends Controller
{
    //
    public function artists(){
    	$artists =  Artist::all();
    	return  view("music/artists")->with("artists", $artists);

    }
    public function artist($id){
    	$artist = Artist::where("id",$id)->first();
    	
    	$songs = Song::where("artist_id", $id)->get();

    	return view("music/artist")->with("artist", $artist)->with("songs", $songs);
    }
}
