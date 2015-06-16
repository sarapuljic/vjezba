<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	setcookie('fontSize', (int) $_POST['font-size'], time() + 60*60 );
	header("Location: font.php");
}

$font_size=isset($_COOKIE['fontsize']) ? $_COOKIE['fontSize'] . 'px' : '16px';


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>

<style>
	body{
		font-size: <?php $font_size . ';'; ?>
	}

	li{
	list-style:none;
}
	ul, li{
	margin:0px;
	padding:0px;
}
</style>

</head>

<body>

	<form action="" method="post">
	
	<li>
		<label for="font-size">Your Prefferd Font Size</label><br>
		<select name="font-size" id="font-size">
			<option value="10">10</option>
			<option value="20">20</option>
			<option value="30">30</option>
			<option value="40">40</option>

		</select>
	
	</li>
	
	<li>
		<input type="submit" name="submit" value="submit"/>
	
	</li>
	
	</form>
	
	<h2>My Page</h2>
	<p>Text size.</p>
	


</body>

</html>
