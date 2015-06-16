<?php

//function array_pluck($toPluck, $arr){
	//$ret = array();
	
	//foreach($arr as $item){
		//$ret[]=$item[$toPluck];
		
	//}
	
	//var_dump($ret);
	
//}


function array_pluck($toPluck, $arr){
		return array_map(function($item) use($toPluck) {
			return $item[$toPluck];
		
		}, $arr);
		
}


$people = array(
	array(
	'name' => 'Sara',
	'age' => 22
	),
	array(
	'name' => 'lkdsjf',
	'age' => 21
	)

);

$names = array_pluck('name', $people);
foreach($names as $name){
echo "<li> $name </li>";
}
print_r($names);

