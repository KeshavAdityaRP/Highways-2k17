
<?php
include('session.php');

   if($_SERVER["REQUEST_METHOD"] == "GET") {
   $tname=$_GET['tname'];
   $m1=$_GET['m1'];
   $m2=$_GET['m2'];
   $m3=$_GET['m3'];
   $m4=$_GET['m4'];
   $m5=$_GET['m5'];
   $m6=$_GET['m6'];
   $m7=$_GET['m7'];
      $m7=$_GET['m8'];

   $m7=$_GET['m9'];

   
     $sql = "INSERT INTO foosball"."(id,tname,m1,m2,m3,m4,m5,m6,m7,m8,m9)"."VALUES "."('$login_session','$tname','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$m9')";
     $ret=mysqli_query($db,$sql);
if($ret=='TRUE'){
     $sql = "INSERT INTO events"."(id,foosball)"."VALUES"."('$login_session','foosball')";
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