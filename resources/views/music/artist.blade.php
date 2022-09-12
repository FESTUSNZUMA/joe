@extends("layouts.master")

@section("content")
@extends("navbar.navbar")
<div class="topContainer ">
	@extends("navbar.sidebar")
	<div class="centerSection">
		<div class="artistInfo borderbottom">
			<h1>{{$artist->name}}</h1>
			<button class="plybtn">Play</button>
		</div>
		<div class="trackListContainer borderbottom">
		<ul class="trackList">
	<?php $i=1; ?>

	@foreach ($artist->songs as $songs )
<li class="trackListRow"> 
	<div class="trackCount">
	<span class="trackNumber"><?php echo $i; ?></span>
	<img src="/assets/images/icons/play-white.png"  class="play" 
	onclick="setTrack('{{$songs->id}}', '{{$artist->songs}}', true)" >
	
	
	
	<?php  $i++; ?>
</div>
<div class="trankInfo">
	<span class="trackName">{{$songs->title}}</span>
	<span class="artistName">{{$artist->name}}</span>
	</div>
	<div class="trackOptions">
		<img  class="optionsButton" src="/assets/images/icons/more.png">
	</div>
</li>

@endforeach
<ul>
</div>
<div class="artistAlbum">
	<h2>Album Artist</h2>
	<div class="flexViewItems" style="margin-top:10px;">
		
		@foreach($artist->albums as $album)
		
		<div class="flexItem">
			<a href="/album/{{$album->id}}">
		<img src="{{$album->album_image}}">
		<div class="flexItemInfo">
<h2>{{$album->title}}</h2>
</div>
</a>

</div>
@endforeach
	</div>
</div>
	</div>
		
</div>
@extends("navbar.nowPlayingBar")
@endsection("content")