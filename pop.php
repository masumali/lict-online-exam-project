<?php
session_start();
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
for ($i=0; $i<2 ; $i++) { 
$pp=$i;}

$query="SELECT * FROM question WHERE qid='$pp'";
$uop=mysqli_query($con,$query);
$num=mysqli_num_rows($uop);
$row=mysqli_fetch_array($uop);
$id=$row['qid'];
$qos=$row['question'];
$ko1=$row['ans1'];
$ko2=$row['ans2'];
$ko3=$row['ans3'];
$ko4=$row['ans4'];
echo "<form>";
echo "<question:>$qos";
echo "<input type='radio' name='ans' value=1>$ko1";
echo "<input type='radio' name='ans' value=2>$ko2";
echo "<input type='radio' name='ans' value=3>$ko3";
echo "<input type='radio' name='ans' value=4>$ko4";
echo "<button><input type='submit' name='ans' value=next></button>";
echo "<input type='submit' name='ans' value=result>";
echo "</form>";

?>