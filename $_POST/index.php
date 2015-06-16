<?php

if(!empty($_POST)){
print_r($_POST);
}else{
	echo 'Nothing to show. It is empty';
}

echo $_SERVER['REQUEST_METHOD'];

?>


<h1>Contact form</h1>

<form action="" method="post">

	<ul>
	
	<li>
	
		<label for="name">Name: </label>
		<input type="text" name="name">
	
	</li>
	
	<li>
		<input type="submit" value="Go!">
	</li>
	
	</ul>

</form>
