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

	
<form action="<?php echo e(route('save')); ?>" method="post">


    <?php echo csrf_field(); ?>
	<div class="mt-md-4">
		<label for="email">Enter Email</label><br>
		<input type="email" id="email" value="<?php echo e(old('email')); ?>">
		<span class="text-danger"><?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
	</div>


	<div class="mt-md-4">
		<label for="password">Enter password</label><br>
		<input type="text" id="password" value="<?php echo e(old('password')); ?>">
		<span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
	</div>

    <div class="mt-md-4">
		<label for="password">Confirm password</label><br>
		<input type="text" id="password" value="<?php echo e(old('password')); ?>" >
		<span class="text-danger"><?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?><?php echo e($message); ?> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?></span>
	</div>


	<div class="checkbox">
	<label><input type="checkbox"> Remember me</label>
	</div>


	<button type="submit" class="btn btn-default">Submit</button><br>
    <a href="/login">Already An Account! Singing Here</a>
  </form>  
	
</body>
</html><?php /**PATH /var/www/html/crud/resources/views/auth/registration.blade.php ENDPATH**/ ?>