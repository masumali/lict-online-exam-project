
<?php
session_start();
$ip="localhost";
$user="root";
$password="";
$dbname="result";
$con=mysqli_connect($ip,$user,$password,$dbname);

if (!mysqli_connect_error()){
	echo "";
}else{
	echo "database not coonect";
}
if (isset($_POST['submit'])) {
	$PASS=$_POST['password'];
	$email=$_POST['email'];
	$query="SELECT * FROM signin WHERE email='$email' AND password='$PASS'";
	$row=mysqli_query($con,$query);
	$num=mysqli_num_rows($row);
	if ($num==1){
		echo "<script>alert('Your Login Name or Password is taken already and input are empty');</script>";
	}else{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$PASS=$_POST['password'];
	$Query="INSERT INTO signin(`name`,`email`,`password`) VALUES ('{$name}','{$email}','{$PASS}')";
	$res=mysqli_query($con,$Query);
	if ($res && !empty($email) && !empty($PASS)){
		$_SESSION['email']=$email;
		header("location:sign_up.php");
		
		
	}else{
		echo "something wrong";
	}
}

}
?>
<?php 
require('signin.html');

?>