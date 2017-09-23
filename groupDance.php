
<?php
include('session.php');

   if($_SERVER["REQUEST_METHOD"] == "GET") {
   $tname=$_GET['tname'];
   $m1=$_GET['m1'];
   
   
     $sql = "INSERT INTO groupDance"."(id,tname,members)"."VALUES "."('$login_session','$tname','$m1')";
     $ret=mysqli_query($db,$sql);
     if($ret=='TRUE'){
     $sql = "INSERT INTO events"."(id,groupDance)"."VALUES"."('$login_session','groupDance')";
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