
<?php
include('session.php');

   if($_SERVER["REQUEST_METHOD"] == "GET") {
   $tname=$_GET['tname'];
   $m1=$_GET['m1'];
   
   
     $sql = "INSERT INTO bandMusic"."(id,tname,members)"."VALUES "."('$login_session','$tname','$m1')";
     $ret=mysqli_query($db,$sql);
     
          $ret=mysqli_query($db,$sql);
                    //header("location: index1.php");
if($ret=='TRUE'){
     $sql = "INSERT INTO events"."(id,bandMusic)"."VALUES"."('$login_session','bandMusic')";
               $ret=mysqli_query($db,$sql);
$error="Registration Successful";
 echo "<script type='text/javascript'>alert('$error');</script>";

    echo "<script type=\"text/javascript\">location.href = 'index1.php';</script>";
}
 else{
 $error="Already Registered";
 echo "<script type='text/javascript'>alert('$error');</script>";

    echo "<script type=\"text/javascript\">location.href = 'index1.php';</script>";
}
}
?>