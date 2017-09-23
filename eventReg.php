<?php
include('session.php');
   if($_SERVER["REQUEST_METHOD"] == "GET") {

$e=$_GET['event'];
echo $e;
echo json_encode($login_session);
echo json_encode($db);

   $sql = "INSERT INTO $e"."(id)"." VALUES"."('$login_session')";
               $ret=mysqli_query($db,$sql);

echo json_encode($sql);
  
          //$ret=mysqli_query($db,$sql);
          //echo json_encode($ret);

if($ret=='TRUE'){
$sql = "INSERT INTO events(id , $e) VALUES ('$login_session' , '$e')";
$ret=mysqli_query($db,$sql);
echo $ret;

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