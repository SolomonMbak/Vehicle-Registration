<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "kadpoly_cars";

//Connection
$conn = mysqli_connect($host, $username, $password, $database);

//Anti-Hack: Escape strings.
function mres($conn,$data){
	return mysqli_escape_string($conn,rtrim($data));
}

?>