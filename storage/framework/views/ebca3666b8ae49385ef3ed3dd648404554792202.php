<h1>User Login</h1>


<form action="users" method="POST">

<?php echo csrf_field(); ?>
    <input type="text" name="Username" placeholder="Ener Email"/> <br> <br>
     <input type="text" name="Username" placeholder="Ener Password"/> <br> <br>
    <button type="submit"> Login </button>

 </form><?php /**PATH /var/www/html/crud/resources/views/user.blade.php ENDPATH**/ ?>