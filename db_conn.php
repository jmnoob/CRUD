<?php

$name = "localhost";
$uname = "root";
$password = "";

$db_name = "my_db";

$conn = mysqli_connect($name, $uname, $password, $db_name);

if(!$conn){
	echo "Connection Failed";
}

?>