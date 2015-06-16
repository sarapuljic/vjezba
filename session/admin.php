<?php

include 'functions.php';

session_start();


if( !is_logged_in() ){
	header('Location: login.php');
	die();

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>

<h1>Hello, <?php echo $_SESSION['username'];?></h1>
<a href="logout.php">Logout</a>

</body>

</html>
