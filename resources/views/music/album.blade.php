@extends("layouts.master")

@section("content")
@extends("navbar.navbar")
<div class="topContainer">
@extends("navbar.sidebar")
<div class="albumContent">



	<h1>Listen To your music</h1>
	<div class="albumSongs"> 
		<div class="entityInfo">
			<div class="leftInfo">
				<img src={{$album_details->album_image}}>
			</div>
			<div class="rightInfo">
				<span class="albumTitle">{{$album_details->title}}</span>
				<span class="albumArtist">{{$artist->name}}</span>
				<span class="albumNumbers">{{$album_details->songs->count()}} songs</span>
			</div>
	</div>
	<div class="trackListContainer">
		<ul class="trackList">
	<?php $i=1; ?>

	@foreach ($album_details->songs as $albumSongs )
<li class="trackListRow"> 
	<div class="trackCount">
	<span class="trackNumber"><?php echo $i; ?></span>
	<img src="/assets/images/icons/play-white.png"  class="play" 
	onclick="setTrack('{{$albumSongs->id}}', '{{$album_details->songs}}', true)" >
	
	
	
	<?php  $i++; ?>
</div>
<div class="trankInfo">
	<span class="trackName">{{$albumSongs->title}}</span>
	<span class="artistName">{{$artist->name}}</span>
	</div>
	<div class="trackOptions">
		<img  class="optionsButton" src="/assets/images/icons/more.png">
	</div>
</li>

@endforeach
<ul>
</div>
</div>
	</div>
<script>
	
//	var tempSong = {!! $album_details->songs !!}; 
//	currentPlaylist = tempSong
//	console.log(currentPlaylist)

</script>

</div>

@extends("navbar.nowPlayingBar")


<script>


	$(document).ready(function(){
	let mysongs=[];
	
	currentPlaylist =	  {!! $album_details->songs !!};
	
})

</script>
@endsection("content")