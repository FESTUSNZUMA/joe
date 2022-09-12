<?php

namespace App\Http\Controllers;
use  App\Album;
use  App\Song;
use App\Artist;
use Illuminate\Http\Request;

class AblumController extends Controller
{
    //
    public function index(){

    	$albums = Album::all();
        $allSongs = Song::all();
        $album = Album::all()->random(1)->first();
        $artist = Artist::all()->random(1)->first();

    	return view("music.index")->with("albums", $albums)->with("allSongs", $allSongs)->with("artist", $artist)->with("album", $album);
    }

    public function album ($id){
    	$albumId = $id;
    	$album_details = Album::where("id", $albumId)->first();
    	$artist_id =$album_details->artist_id;
    	$artist = Artist::where("id", $artist_id)->first();
  $songs = Song::all();

return view("music.album")->with("album_details", $album_details)->with( "artist", $artist)->with("songs", $songs);

    }

}
