<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login</title>
</head>
<body>

	
<form action="<?php echo e(route("register-user")); ?>">
	<div class="mt-md-4">
		<label for="email">Enter Email</label><br>
		<input type="email" id="email">
	</div>


	<div class="p-4">
		<label for="password">Enter password</label><br>
		<input type="text" id="password" >
	</div>


	<div class="checkbox">
	<label><input type="checkbox"> Remember me</label>
	</div>


	<button type="submit" class="btn btn-default">Submit</button><br>
	<a href="/registration">Dont Have Account! Create Here</a>
  </form>  
	
</body>
</html><?php /**PATH /var/www/html/crud/resources/views/auth/login.blade.php ENDPATH**/ ?>