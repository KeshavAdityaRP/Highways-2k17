
<?php
include('session.php');

   if($_SERVER["REQUEST_METHOD"] == "GET") {
   $tname=$_GET['tname'];
   $m1=$_GET['m1'];
   $m2=$_GET['m2'];
   
   
     $sql = "INSERT INTO masterchef"."(id,tname,m1,m2)"."VALUES "."('$login_session','$tname','$m1','$m2')";
     $ret=mysqli_query($db,$sql);
         if($ret=='TRUE'){
     $sql = "INSERT INTO events"."(id,masterchef)"."VALUES"."('$login_session','masterchef')";
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