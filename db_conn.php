<?php

$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "task";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo 'ERROR: Could not connect. '. mysqli_connect_error();
}
?>