<?php

$arr=array( '1' => 'A', '2' => 'B', '3' => 'C','4' => 'D');


foreach($arr as $number => $name){
echo " " . $number . " " . $name;
}

$array=array('A', 'B', 'C', 'D');

for($i=0; $i<count($array); $i++){
	echo "<li> $array[$i] </li>";

}

?>