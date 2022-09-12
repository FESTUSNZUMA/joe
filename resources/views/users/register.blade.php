@extends("layouts.master")

@section("content")
<div class="background" id="background">
<div class="loginContainer" id="loginContainer">

<div class="inputContainer" id="inputContainer">

<form name="registerForm" id="registerForm" method="POST" action="/signup">
	  {!! csrf_field() !!} 
	<p>
	<label>Username</label>
	@if ($errors->has('username')) 
    <div class="alert alert-danger">{{ $errors->first('username') }}</div>
@endif
	<input type="text" name="username" class="inputText"id="username" required>
</p>
<p>
	<label>Email</label>
	@if ($errors->has('email')) 
    <div class="alert alert-danger">{{ $errors->first('email') }}</div>
@endif
	<input type="email" class="inputText" name="email" id="email" required>
</p>
<p>
	<label>Password</label>
	@if ($errors->has('password')) 
    <div class="alert alert-danger">{{ $errors->first('password') }}</div>
@endif
	<input type="password"  class="inputText" name="password" id="password">
	</p>
	<p>
	<label> Confirm Password</label>
	
	<input type="password"  class="inputText" name="password_confirmation" id="password2">
	</p>
	<p>
		<button type="submit"  name="Register" >Register</button>
	</p>
</form>
</div>
<div class="loginText" id="loginText">
	<h1>Get great music</h1>
	<h2>Listen lots of Songs for free</h2>
	<ul>
		<li>Discover Music you'll fall in love with</li>
		<li>Create your own playList</li>
		<li>Follow artist to keep up to date</li>
	</ul>

</div>
</div>
</div>
@endsection("content")