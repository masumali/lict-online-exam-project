<?php
session_start();
if(!isset($_SESSION["email"])){
	header("location:index.php");
}
?>
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
if(isset($_POST['submit'])) {
	$email=$_POST['email'];
	$PASS=$_POST['password'];
	$query="SELECT * FROM signin WHERE email='$email' AND password='$PASS'";
	$row=mysqli_query($con,$query);
	$num=mysqli_num_rows($row);
	if ($num==1){
		header("location:selectexam.php");
		
	}else{
		echo "<script>alert('Your Login Name or Password is invalid and input are empty');</script>";
	}
}

?>
<?php

require ('sign_up.html');

?>