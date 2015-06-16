<?php

session_start();

echo $_SESSION['username'];
var_dump($_SESSION);

session_destroy();
