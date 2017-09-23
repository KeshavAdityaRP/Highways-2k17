<?php
include("config.php");
session_start();
   //echo "2"
if($_SERVER["REQUEST_METHOD"] == "POST") {
  $pass = mysqli_real_escape_string($db,$_POST['sign_pass']); 
   	//$name = mysqli_real_escape_string($db,$_POST['sign_name']); 
   	//$regno = mysqli_real_escape_string($db,$_POST['reg']); 
  $uname = mysqli_real_escape_string($db,$_POST['sign_user_name']);
  $year = mysqli_real_escape_string($db,$_POST['year']);
  $dept = mysqli_real_escape_string($db,$_POST['dept']);
  $sec = mysqli_real_escape_string($db,$_POST['sec']);
  $name = mysqli_real_escape_string($db,$_POST['sign_name']); 
   	//$email = mysqli_real_escape_string($db,$_POST['sign_mail']); 
   	//$phno = mysqli_real_escape_string($db,$_POST['sign_phone']); 
  $sql = "INSERT INTO login".
  "(id,pass,year,dept,sec,name) ".
  "VALUES ".
  "('$uname','$pass','$year','$dept','$sec','$name')";
  $ret=mysqli_query($db,$sql);
	#header("location: index.php");
  $error="Sign up Successful . Now you can Login and Register for events";
  echo "<script type='text/javascript'>alert('$error');</script>";

  echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";
}
else{
 $error="Username already taken, please try something else";
 echo "<script type='text/javascript'>alert('$error');</script>";

 echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";
}

?>