<?php
   include('config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select id, pass from login where id = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['id'];
  

/*
   $login_event1_session = $row['event1'];

   $login_event2_session = $row['event2'];
   
   
   if(!isset($_SESSION['login_user'])){
      header("location: index.php");
   }*/
?>