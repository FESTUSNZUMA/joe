<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    //
    public function genre(){
    	return $this->belongsTo(Genre::class);
    }

    public function songs(){
    	return $this->hasMany(Song::class);
    }
    public function artist(){
    	return $this->belongsTo(Artist::class);
    }
}
