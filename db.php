<?php
$ip="localhost";
$user="root";
$password="";
$dbname="result";
$con=mysqli_connect($ip,$user,$password,$dbname);
if (!mysqli_connect_error()) {
	echo "";
}else{
	echo "database not coonect";
}
?>