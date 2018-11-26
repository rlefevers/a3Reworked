<?php include('elements/admin_header.php');?>

<div class="container">
	<div class="page-header">
   <h1> Register View </h1>
  </div>
  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form id="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>" method="post">
					<fieldset>
						<legend>Register as a New User:</legend>
						<label for="first_name">First Name:</label>
						<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" required="first_name" />
						<br>
						<label for="last_name">Last Name:</label>
						<input type="text" id="last_name" name="last_name" value="<?php echo $last_name;?>" required="last_name" />
						<br>
						<label for="email">E-mail Address:</label>
						<input type="text" id="email" name="email" value="<?php echo $email;?>" required="email" />
						<br>
						<label for="password">Password:</label>
						<input type="password"  id="password" name="password" value="<?php echo $password;?>"required="password" />
						<br>
						<button id="submit" type="submit">Register</button>
						</fieldset>
					</form>
      </div>
    </div>
</div>
<?php include('elements/admin_footer.php');?>
