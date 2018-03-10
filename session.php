<?php
session_start();
$ip ='localhost';
$username = 'root';
$password = '';
$dbname = 'result';
$user_check = $_SESSION['email'];
$OP=$_SESSION['password'];
$connection = mysqli_connect($ip, $username, $password, $dbname);
$ses_sql = mysqli_query($connection ,"SELECT `email` FROM signin WHERE `email`='{$user_check}' AND `password`='{$OP}'");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['email'];
if(!isset($_SESSION['email'])){
  header("location:index.php");
}
?>
