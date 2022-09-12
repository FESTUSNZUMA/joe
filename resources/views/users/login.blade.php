@extends("layouts.master")

@section("content")
<div class="background"  id="background">
<div class="loginContainer" id="loginContainer">


<div class="inputContainer" id="inputContainer">
<form name="registerForm"  id="registerForm" method="POST" action="/signup">
	{!! csrf_field() !!}
	<p>
	<label >Email</label>
	<input type="email" class="inputText" name="email" id="email">
</p>
<p>
	<label>Password</label>
	<input type="password" class="inputText" name="passwordpassword" id="password">
	</p>
	<p>
		<button type="submit" name="Register" >Login</button> 

	</p>
</form>

<a href="/signup" >Create Account</a>
<a href="/signup" >Forgot password</a>
</div>
<div class="loginText" id="loginText">
	<h1>Get great music</h1>
	<h2>Listen lots of Songs fro free</h2>
	<ul>
		<li>Discover Music you'll fall in love with</li>
		<li>Create your own playList</li>
		<li>Follow artist to keep up to date</li>
	</ul>

</div>


</div>
</div>
@endsection("content")