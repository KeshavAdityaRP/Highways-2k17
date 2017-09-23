<?php
include('config.php');
session_start();
   //echo "2"
if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      //echo "1";
  $username = mysqli_real_escape_string($db,$_POST['myusername']);
  $password = mysqli_real_escape_string($db,$_POST['mypassword']); 
  
  $sql = "SELECT id FROM login WHERE id = '$username' and pass = '$password'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

      //$active = $row['active'];
  
  $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
  if(!($username=='rustdragon'&& $password=='svcedaaw'))
  {
    if($count == 1) {
       //  session_register("myusername");
     $_SESSION['login_user'] = $username;
     
         /*
         $sql1 = "SELECT event1 FROM credentials WHERE username = '$myusername' and passcode = '$mypassword'";
         $result1 = mysqli_query($db,$sql1);
         $row1 = mysqli_fetch_array($result1,MYSQLI_ASSOC);

         $_SESSION['login_user_event1'] = $row1['event1'];
         */
         #header("location: index1.php");//echo "4";
         echo "<script type=\"text/javascript\">location.href = 'index1.php';</script>";
       }else {
        $error = "Your Login Name or Password is invalid";
        $message = "Username has already been taken";
        echo "<script type='text/javascript'>alert('$error');</script>";
        echo "<script type=\"text/javascript\">location.href = 'index.php';</script>";
      }}
      else{
        echo "<script type=\"text/javascript\">location.href = 'profilea.php';</script>";
      }
   //echo "3";
    }
    ?>