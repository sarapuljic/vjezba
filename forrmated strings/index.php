<?php

list ($name, $surname, $age) = sscanf("Sara Puljić 22", "%s %s %d");

echo $surname . ' ' . $name . ' ' .  $age;
