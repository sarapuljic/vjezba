<?php

$months = array('January', 'February', 'March');
var_dump($months);

foreach ($months as $abc){

	echo "<li>$abc</li>";
}

$months2 = array(
	'1' => 'january',
	'2' => 'february',
	'3' => 'march',
	);
	

array_push($months2, 'april');
array_pop($months2);
array_shift($months2);
array_unshift($months2, 'january');

foreach ($months2 as $name){
	echo "<li> " .ucwords($name) . "</li>";
}

$output = array_slice($months2, 2,1);
print_r($output);

$three = array_filter($months2, function($name) {return strlen($name)==5;});
print_r($three);


?>