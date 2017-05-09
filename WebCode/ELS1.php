<!DOCTYPE html>
<html>
<head>
	<title>User Registration Script</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- add header -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="login.php">#Khon Institute</a>
		</div>
		<!-- menu items -->

	</div>
</nav>

<form name="frmRegistration" method="post" action="register.php">
<table border="0" width="500" align="center" class="demo-table">
<?php if(!empty($success_message)) { ?>	
<div class="success-message"><?php if(isset($success_message)) {echo $success_message; }?></div>
<?php } ?>
<?php if(!empty($error_message)) { ?>	
<div class="error-message"><?php if(isset($error_message)){ echo $error_message;} ?></div>
<?php } ?>
<tr>
<td>Name</td>
<td><input type="text" class="demoInputBox" name="name" value="<?php if(isset($_PDO['name'])) {echo $_POST['name'];} ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" class="demoInputBox" name="email" value="<?php if(isset($_PDO['email'])) echo $_PDO['email']; ?>"></td>
</tr>
<tr>
<td>Start Date</td>
<td><input type="text" class="demoInputBox" name="date1" value="<?php if(isset($_PDO['date1'])) echo $_PDO['date1']; ?>"></td>
</tr>
<tr>
<td>End Date</td>
<td><input type="text" class="demoInputBox" name="date2" value=""></td>
</tr>
<tr>
<td>Event Time</td>
<td><input type="text" class="demoInputBox" name="event_time" value=""></td>
</tr>
<td>Number of guests:</td><td><input type="text" name="number_of_guests" class="demoInputBox"></td>
</tr>
<td>Additional Details:</td>
		<td><input type="text" name="additional_details" class="demoInputBox"></td>
		</tr>
		<td>Physical Address:</td>
		<td><input type="text" name="physical_address" class="demoInputBox"></td>
		</tr>
		<td>City:</td>
		<td><input type="text" name="city" class="demoInputBox"></td>
		</tr>
		<td>Region:</td>
		<td><input type="text" name="region" class="demoInputBox"></td>
		</tr>
<tr>
<td colspan=2>
<input type="checkbox" name="terms"> I accept Terms and Conditions <input type="submit" name="register-user" value="Register" class="btnRegister"></td>
</tr>
</table>
</form>
	<div class="row">
		<div class="col-md-4 col-md-offset-4 text-center">
		Already Registered? <a href="login.php">Login Here</a>
		</div>
	</div>
</div>
<script src="js/jquery-1.10.2.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>