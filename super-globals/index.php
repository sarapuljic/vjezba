
<h1>Super Globals</h1>
<?php

if(isset ($_GET['name']) ) {
	echo $_GET['name'];
}else{
	echo 'Is not set';
}