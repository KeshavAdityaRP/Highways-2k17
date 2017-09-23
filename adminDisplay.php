<?php
include('session.php');

if($_SERVER["REQUEST_METHOD"] == "GET") {
      $eventName = mysqli_real_escape_string($db,$_GET['event']);
      echo "<div class=\"row\">";
      echo "<div class=\"col s12 m12 l12\">";
      echo "<h1>$eventName</h1>";
      echo "</div>";
      echo "</div>";
      
      //$register = "reg";
      //echo $register;
      $sql = "";

if ($eventName == "event1") {
  //$sql = "SELECT l.id , e.uname , e.event1 FROM login as l , events as e WHERE l.id = e.uname AND e.event1 = 'reg' AND l.id = '$user_check'";
  $sql = "SELECT id FROM events WHERE event1 = 'reg'"; 
}
elseif ($eventName == "event2") {
  $sql = "SELECT id FROM events WHERE event2 = 'reg'"; 
}
elseif ($eventName == "event3") {
  $sql = "SELECT id FROM events WHERE event3 = 'reg'"; 
}
elseif ($eventName == "event4") {
  $sql = "SELECT id FROM events WHERE event4 = 'reg'"; 
}
else{
  $sql = "SELECT id FROM events WHERE event5 = 'reg'"; 
}



//$sql = "SELECT d.idd FROM patient as p , profilep as d WHERE p.idp = d.idp AND p.idp = '$login_session' ";

//echo $sql;

$result = $db->query($sql);


if ($result->num_rows > 0) {
     // output data of each row
     while($row= $result->fetch_assoc()) {

     	 echo "<div class=\"row\">";
     	 echo "<div class=\"col s12 m12 l12\">";
         //echo "<p> id: ". $row["id"]."</p>";
         echo "<p> ID: ". $row["id"]."</p>";
         //echo "<p> event: ". $row["event1"]."</p>";
         echo "</div>";
         echo "</div>";

         $each_uname = $row["id"];
         //echo $each_uname;
         
         $sql1 = "SELECT l.name , l.year , l.dept, l.sec FROM login as l , events as e WHERE l.id = '$each_uname'";
         
         $result1 = $db->query($sql1); 

         if ($result1->num_rows > 0) {
     // output data of each row
     while($row1= $result1->fetch_assoc()) {
        echo "<div class=\"row\">";
        echo "<div class=\"col s12 m12 l12\">";
        /*echo "<p> id: ". $row1["id"]."</p>";*/
        echo "<p> name: ". $row1["name"]."</p>";
        echo "<p> year: ". $row1["year"]."</p>";
        echo "<p> dept: ". $row1["dept"]."</p>";
        echo "<p> section: ". $row1["sec"]."</p>";
        echo "</div>";
        echo "</div>";
        
        if ($eventName == "event4") {
          $sql2 = "SELECT tname , m1 , m2 , m3  FROM event4 WHERE id = '$each_uname'";
          $result2 = $db->query($sql2);

       if ($result2->num_rows > 0) {
     // output data of each row
     while($row2= $result2->fetch_assoc()) {
        echo "<div class=\"row\">";
        echo "<div class=\"col s12 m12 l12\">";
        echo "<p> team name: ". $row2["tname"]."</p>";
        echo "<p> member 1: ". $row2["m1"]."</p>";
        echo "<p> member 2: ". $row2["m2"]."</p>";
        echo "<p> member 3: ". $row2["m3"]."</p>";
        echo "</div>";
        echo "</div>"; 
        break;
        }
      }  

   }


        break;

      }
    } else {
      echo "0 results";
    }

  }

} else {
     echo "0 results";
}
}
else{
    echo "didnt get data from form";
}

?>