<?php
include('session.php');

   if($_SERVER["REQUEST_METHOD"] == "GET") {
   $tname=$_GET['tname'];
   $m1=$_GET['m1'];
   $m2=$_GET['m2'];
   $m3=$_GET['m3'];
   $m4=$_GET['m4'];
   $m5=$_GET['m5'];
   
     $sql = "INSERT INTO channelSurfing"."(id,tname,m1,m2,m3,m4,m5)"."VALUES "."('$login_session','$tname','$m1','$m2','$m3','$m4','$m5')";
     $ret=mysqli_query($db,$sql);
          if($ret=='TRUE'){
     $sql = "INSERT INTO events"."(id,channelSurfing)"."VALUES"."('$login_session','channelSurfing')";
               $ret=mysqli_query($db,$sql);

$error="Registration Successful";
 echo "<script type='text/javascript'>alert('$error');</script>";

    echo "<script type=\"text/javascript\">location.href = 'index1.php';</script>";}
 else{
 $error="Already Registered";
 echo "<script type='text/javascript'>alert('$error');</script>";

    echo "<script type=\"text/javascript\">location.href = 'index1.php';</script>";
}

}
?>