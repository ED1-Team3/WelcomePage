<?php

$db_user = "root";
$db_pass = "";
$db_name = "useraccounts";

$db = new PDO('mysql:host=localhost:4306; dbname='. $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

// PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION





