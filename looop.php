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
	$question=$_POST['question'];
	$ans1=$_POST['ans1'];
	$ans2=$_POST['ans2'];
	$ans3=$_POST['ans3'];
	$ans4=$_POST['ans4'];
	$correctans=$_POST['correctans'];
	$slno=$_POST['slno'];
	$Query="INSERT INTO ques(`qid`,`question`,`ans1`,`ans2`,`ans3`,`ans4`,`correctans`) VALUES (null,'{$question}','{$ans1}','{$ans2}','{$ans3}','{$ans4}','{$correctans}')";
	$res=mysqli_query($con,$Query);
	if ($res) {
		echo "sucess";
	$_SESSION['eop']=$slno;
}else
{
	echo "false";
}
}
require ('loop.html');
?>