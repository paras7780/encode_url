<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "core_php";
$connection = mysqli_connect("$server","$username","$password","$database");
if(!$connection)
{
	echo("connection terminated");
}
?>