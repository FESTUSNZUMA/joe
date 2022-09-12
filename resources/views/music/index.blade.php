@extends("layouts.master")

@section("content")
@extends("navbar.navbar")
<div class="topContainer">
@extends("navbar.sidebar")
	<div class="centerContainer " style="padding-bottom: 30px;">
		<div class="slider">
		<div class="sliderContainer" id="sliderContainer">
			<div class="sliderImg fade" >
			<img src="/assets/images/artwork/energy.jpg">
			<a href="/album/{{$album->id}}"><h2>{{$album->title}}</h2></a>
		</div>
			<div class="sliderImg fade" >
			<img src="/assets/images/artwork/energy.jpg">
		<a href="#">	<h2>Playlsist 1</h2></a>
		</div>
			<div class="sliderImg fade" >
			<img src="/assets/images/artwork/energy.jpg">
		<a href="#">	<h2>Trending Music</h2></a>
		</div>
			<div class="sliderImg fade" >
			<img src="/assets/images/artwork/energy.jpg">
		<a href="/artsits/{{$artist->id}}">	<h2 >{{$artist->name}} 4</h2></a>
		</div>
		</div>
		</div>
<div class="albumContainer" style="padding-bottom: 100px;">
	<div class="flexViewItems">
		@foreach($albums as $album)
		
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