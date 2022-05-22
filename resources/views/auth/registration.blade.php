<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registration</title>

    <link href="/css/app.css" rel="stylesheet">
</head>
<body>

	
<form action="{{ route('save') }}" method="post">


    @csrf
	<div class="mt-md-4">
		<label for="email">Enter Email</label><br>
		<input type="email" id="email" value="{{ old('email') }}">
		<span class="text-danger">@error('email'){{ $message }} @enderror</span>
	</div>


	<div class="mt-md-4">
		<label for="password">Enter password</label><br>
		<input type="text" id="password" value="{{ old('password') }}">
		<span class="text-danger">@error('password'){{ $message }} @enderror</span>
	</div>

    <div class="mt-md-4">
		<label for="password">Confirm password</label><br>
		<input type="text" id="password" value="{{ old('password') }}" >
		<span class="text-danger">@error('password'){{ $message }} @enderror</span>
	</div>


	<div class="checkbox">
	<label><input type="checkbox"> Remember me</label>
	</div>


	<button type="submit" class="btn btn-default">Submit</button><br>
    <a href="/login">Already An Account! Singing Here</a>
  </form>  
	
</body>
</html>