<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "friend";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	die("connection failed ".mysql_connect_error());
}
?>