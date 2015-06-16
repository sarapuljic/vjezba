<?php

include 'config.php';
include 'functions.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
//get their values
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	
	if (validate_user_creds($username, $password)){
	
	$_SESSION['username'] = $username;
	header("Location: admin.php");

	}else {
		$status = "Incorrect login credentials.";
	}

}

//if (isset($_POST['loginForm'])){
	//echo "posted";
//}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<h1>Login</h1>

<form action="login.php" method="post">

<ul>

<li>
	<label for="username">Username</label>
	<input type="text" name="username"/>
</li>

<li>
	<label for="password">Password</label>
	<input type="password" name="password" name="loginForm"/>
</li>

<li>
	<input type="submit" value="Login"/>
</li>

</ul>

	<?php if(isset($status)): ?>
	<p><?php echo $status ?></p>
	<?php endif; ?>



</form>

</body>

</html>
