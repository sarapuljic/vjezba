<?php

require 'User.php';

$sara = new User();

$sara->setPassword("1234dfsfsd");
var_dump($sara->getPassword());