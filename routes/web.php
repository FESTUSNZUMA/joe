<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("/signup", "UserController@Register");
Route::get("/signin", "UserController@Login");
Route::get("/music", "AblumController@index");
//album
Route::get("/artsists", "ArtistController@artists");
Route::get("/artist/{id}", "ArtistController@artist");
Route::post("/signup", "UserController@signup");
Route::get("/album/{id}", "AblumController@album");
Route::get("/songs", "SongController@songs");
Route::get("getsong/{id}", "SongController@getSong");
Route::get("/allsongs", "SongController@allSongs");