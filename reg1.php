<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form name ="myForm" method="post" action="login.php">
	

		<?php include('errors.php'); ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
	
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="confirm">
		</div>
			<div class="input-group">
			<label>Email</label>
			<input type="email" pattern=".+@gmail.com" size="30" name="email" >
		</div>
		<div class="input-group">
			<label>Branch</label>
			<!--<input type="text" name="branch">-->			
<select name="branch">
  <option value="IT">IT</option>
  <option value="CS"  >CS</option>
  <option value="CSE">CSE</option>
  <option value="Medical"  selected>Medical</option>
</select>

			
			
		</div>
		<div class="input-group">
			<label>Mobile</label>
			<input type="text" name="mobile" min="6000000000" and max="9999999999" >
		</div>
		
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign In</a>
		</p>
	</form>
	
	<body>
</html>