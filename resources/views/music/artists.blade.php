@extends("layouts.master")

@section("content")
@extends("navbar.navbar")
<div class="topContainer">
	@extends("navbar.sidebar")
	
	
	<div class="artists">
	<h2>Artists</h2>
	<div class="artistsConatiner">
		@foreach($artists as $artist)

	<div class="artistsInfo">
	<div class="artists_name"> 
<a href="/artist/{{$artist->id}}">	<h3>{{$artist->name}}</h3></a>
	</div>
<a href="/artist/{{$artist->id}}">	<img src="/assets/images/profile-pics/head_emerald.png"></a>
	</div>

		@endforeach
</div>	
</div>

@endsection("content")