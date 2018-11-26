<?php include('elements/header.php');?>
<div class="container">
	<div class="page-header">
   <h1> the Login View </h1>
  </div>
	<form action="<?php echo BASE_URL?>do_login/<?php echo $task?>" method="post">
		<label>Register As New User</label>
		<br>
		<label>Username:</label>
		<input type="email" class="span6" id="username" name="username" value="" required>
		<br>
		<label>Password:</label>
		<input type="text" class="span6" name="password" value="" required>
		<br>
		<button id="submit" type="submit" class="btn btn-primary" >Log In</button>
	</form>
</div>
<?php include('elements/footer.php');?>
