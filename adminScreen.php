<!DOCTYPE html>
<html>
<head>
	<title>Highways - Participants List</title>
  <link rel="icon" type="image/png" href="images/Favicon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta http-equiv="pragma" content="no-cache" />	
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>   
	<link rel="stylesheet" type="text/css" href="css/adminStyle.css">	
</head>
<body>
<div class="navbar-fixed" ng-controller="EventsController as events">
  <nav>
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo">&nbsp;&nbsp;Highways2k17</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" id="triple">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a class="waves-effect waves-light btn" href="#help">Help</a></li>
        <li><a href="profilea.php" class="waves-effect waves-light btn">hi <?php echo $login_session; ?></a></li>
        <li><a href="logout.php" class="waves-effect waves-light btn">Sign Out</a></li> 
      </ul>
      <ul class="side-nav" id="mobile-demo">
      <li><a class="waves-effect waves-light btn" href="#help">Help</a></li>
        <li><a href="profilea.php" class="waves-effect waves-light btn">hi <?php echo $login_session; ?></a></li>
        <li><a href="logout.php" class="waves-effect waves-light btn">Sign Out</a></li> 
      </ul>
    </div>
  </nav>
</div> 
  <div id="help" class="modal">
    <div class="modal-content">
      <h4>Help</h4>
      <p>1. Sign Up<br>
         2. Login In<br>
         3. Register for Events of your choice<br>
         4. It is enough for 1 individual to register this team for group events<br>
         5. Please add your name as well to team members list when you register for team events<br>
         6. Just click on the register button to register for individual events</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Close</a>
    </div>
  </div>
<div class="container">
<h1>LIST OF PARTICIPANTS</h1>
<?php
include('session.php');

if($_SERVER["REQUEST_METHOD"] == "GET") {
      $eventName = mysqli_real_escape_string($db,$_GET['event']);
      echo "<div class=\"row\">";
      echo "<div class=\"col s12 m12 l12\">";
      echo "<h2>$eventName</h2>";
      echo "</div>";
      echo "</div>";

      if ($eventName == "spotlight" || $eventName == "adaptTunes" || 
          $eventName == "fifa" || 
          $eventName == "shipwreck" || $eventName == "photography"){
  //$sql = "SELECT l.id , e.uname , e.event1 FROM login as l , events as e WHERE l.id = e.uname AND e.event1 = 'reg' AND l.id = '$user_check'";
      	$sql = "SELECT l.name , l.id, l.year , l.dept, l.sec FROM login as l , $eventName as e WHERE l.id = e.id";

                echo "<table>
                      <thead>
                	  <tr>";

                	echo "<th class = \"info\" data-field=\"id\">USER ID</th>";
                	echo "<th class = \"info\" data-field=\"name\">NAME</th>";
                	echo "<th class = \"info\" data-field=\"year\">YEAR</th>";
                	echo "<th class = \"info\" data-field=\"dept\">DEPARTMENT</th>";
                	echo "<th class = \"info\" data-field=\"sec\">SECTION</th>";

                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";      	 

      	$result = $db->query($sql);

  
        if ($result->num_rows > 0) {
        // output data of each row
            while($row= $result->fetch_assoc()) {
            	/*
            	echo "<div class=\"row\">";
     	        echo "<div class=\"col s12 m12 l12\">";
                echo "<p> ID: ". $row["id"]."</p>";
                echo "<p> NAME: ". $row["name"]."</p>";
                echo "<p> YEAR: ". $row["year"]."</p>";
                echo "<p> DEPARTMENT: ". $row["dept"]."</p>";
                echo "<p> SECTION: ". $row["sec"]."</p>";
                echo "</div>";
                echo "</div>";
                */

                echo "<tr>";
                echo "<td class = \"info\">". $row["id"]."</td>";
                echo "<td class = \"info\">". $row["name"]. "</td>";
                echo "<td class = \"info\">". $row["year"]. "</td>";
                echo "<td class = \"info\">". $row["dept"]. "</td>";             
                echo "<td class = \"info\">". $row["sec"]. "</td>";                
                echo "</tr>";                


            }
        }
        else{
        	echo " No Participants";
        } 
        }   
      /*
      elseif ($eventName == "event2") {
      	$sql = "SELECT l.name , l.id, l.year , l.dept, l.sec FROM login as l , event1 as e WHERE l.id = e.id"; 
      }
      elseif ($eventName == "event3") {
      	$sql = "SELECT id FROM events WHERE event3 = 'reg'"; 
      }
      */
      elseif ($eventName == "masterchef") 
      {
      	$sql = "SELECT l.name , l.id, l.year , l.dept, l.sec, e.tname , e.m1 , e.m2  FROM login as l , masterchef as e WHERE l.id = e.id"; 

                echo "<table>
                      <thead>
                	  <tr>";

                	echo "<th class = \"info\" data-field=\"id\">USER ID</th>";
                	echo "<th class = \"info\" data-field=\"name\">NAME</th>";
                	echo "<th class = \"info\" data-field=\"year\">YEAR</th>";
                	echo "<th class = \"info\" data-field=\"dept\">DEPARTMENT</th>";
                	echo "<th class = \"info\" data-field=\"sec\">SECTION</th>";
                	echo "<th class = \"info\" data-field=\"tname\">TEAM NAME</th>";
                	echo "<th class = \"info\" data-field=\"m1\">TEAMMATE 1</th>";
                	echo "<th class = \"info\" data-field=\"m2\">TEAMMATE 2</th>";
                 
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

      	$result = $db->query($sql);

      

        if ($result->num_rows > 0) {
        // output data of each row
            while($row= $result->fetch_assoc()) {
   
                echo "<tr>";
                echo "<td class = \"info\">". $row["id"]."</td>";
                echo "<td class = \"info\">". $row["name"]. "</td>";
                echo "<td class = \"info\">". $row["year"]. "</td>";
                echo "<td class = \"info\">". $row["dept"]. "</td>";             
                echo "<td class = \"info\">". $row["sec"]. "</td>";
                echo "<td class = \"info\">". $row["tname"]. "</td>";
                echo "<td class = \"info\">". $row["m1"]. "</td>";
                echo "<td class = \"info\">". $row["m2"]. "</td>";                             
                echo "</tr>";



            }
        }
        else{
        	echo " No Participants";
        }      	
      }


      elseif ($eventName == "foosball") 
      {
      	$sql = "SELECT l.name , l.id, l.year , l.dept, l.sec, e.tname , e.m1 , e.m2 ,e.m3 , e.m4 , e.m5 , e.m6 FROM login as l , foosball as e WHERE l.id = e.id"; 

                echo "<table>
                      <thead>
                	  <tr>";

                	echo "<th class = \"info\" data-field=\"id\">USER ID</th>";
                	echo "<th class = \"info\" data-field=\"name\">NAME</th>";
                	echo "<th class = \"info\" data-field=\"year\">YEAR</th>";
                	echo "<th class = \"info\" data-field=\"dept\">DEPARTMENT</th>";
                	echo "<th class = \"info\" data-field=\"sec\">SECTION</th>";
                	echo "<th class = \"info\" data-field=\"tname\">TEAM NAME</th>";
                	echo "<th class = \"info\" data-field=\"m1\">TEAMMATE 1</th>";
                	echo "<th class = \"info\" data-field=\"m2\">TEAMMATE 2</th>";
                	echo "<th class = \"info\" data-field=\"m3\">TEAMMATE 3</th>";
                	echo "<th class = \"info\" data-field=\"m4\">TEAMMATE 4</th>";
                	echo "<th class = \"info\" data-field=\"m5\">TEAMMATE 5</th>";
                	echo "<th class = \"info\" data-field=\"m6\">TEAMMATE 6</th>";                	                	
                 
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

      	$result = $db->query($sql);

      	

        if ($result->num_rows > 0) {
        // output data of each row
            while($row= $result->fetch_assoc()) {
   
                echo "<tr>";
                echo "<td class = \"info\">". $row["id"]."</td>";
                echo "<td class = \"info\">". $row["name"]. "</td>";
                echo "<td class = \"info\">". $row["year"]. "</td>";
                echo "<td class = \"info\">". $row["dept"]. "</td>";             
                echo "<td class = \"info\">". $row["sec"]. "</td>";
                echo "<td class = \"info\">". $row["tname"]. "</td>";
                echo "<td class = \"info\">". $row["m1"]. "</td>";
                echo "<td class = \"info\">". $row["m2"]. "</td>";
                echo "<td class = \"info\">". $row["m3"]. "</td>";
                echo "<td class = \"info\">". $row["m4"]. "</td>";
                echo "<td class = \"info\">". $row["m5"]. "</td>";
                echo "<td class = \"info\">". $row["m6"]. "</td>";                                                             
                echo "</tr>";



            }
        }
        else{
        	echo " No Participants";
        }      	
      }



      elseif ($eventName == "cod") 
      {
      	$sql = "SELECT l.name , l.id, l.year , l.dept, l.sec, e.tname , e.m1 , e.m2 ,e.m3 , e.m4 , e.m5  FROM login as l , cod as e WHERE l.id = e.id"; 

                echo "<table>
                      <thead>
                	  <tr>";

                	echo "<th class = \"info\" data-field=\"id\">USER ID</th>";
                	echo "<th class = \"info\" data-field=\"name\">NAME</th>";
                	echo "<th class = \"info\" data-field=\"year\">YEAR</th>";
                	echo "<th class = \"info\" data-field=\"dept\">DEPARTMENT</th>";
                	echo "<th class = \"info\" data-field=\"sec\">SECTION</th>";
                	echo "<th class = \"info\" data-field=\"tname\">TEAM NAME</th>";
                	echo "<th class = \"info\" data-field=\"m1\">TEAMMATE 1</th>";
                	echo "<th class = \"info\" data-field=\"m2\">TEAMMATE 2</th>";
                	echo "<th class = \"info\" data-field=\"m3\">TEAMMATE 3</th>";
                	echo "<th class = \"info\" data-field=\"m4\">TEAMMATE 4</th>";
                	echo "<th class = \"info\" data-field=\"m5\">TEAMMATE 5</th>";                	                	
                 
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

      	$result = $db->query($sql);

      	

        if ($result->num_rows > 0) {
        
            while($row= $result->fetch_assoc()) {
   
                echo "<tr>";
                echo "<td class = \"info\">". $row["id"]."</td>";
                echo "<td class = \"info\">". $row["name"]. "</td>";
                echo "<td class = \"info\">". $row["year"]. "</td>";
                echo "<td class = \"info\">". $row["dept"]. "</td>";             
                echo "<td class = \"info\">". $row["sec"]. "</td>";
                echo "<td class = \"info\">". $row["tname"]. "</td>";
                echo "<td class = \"info\">". $row["m1"]. "</td>";
                echo "<td class = \"info\">". $row["m2"]. "</td>";
                echo "<td class = \"info\">". $row["m3"]. "</td>";
                echo "<td class = \"info\">". $row["m4"]. "</td>";
                echo "<td class = \"info\">". $row["m5"]. "</td>";
                                                                    
                echo "</tr>";



            }
        }
        else{
        	echo " No Participants";
        }      	
     }

      elseif ($eventName == "bandMusic") 
      {
      	$sql = "SELECT l.name , l.id, l.year , l.dept, l.sec, e.tname , e.members   FROM login as l , bandMusic as e WHERE l.id = e.id"; 

                echo "<table>
                      <thead>
                	  <tr>";

                	echo "<th class = \"info\" data-field=\"id\">USER ID</th>";
                	echo "<th class = \"info\" data-field=\"name\">NAME</th>";
                	echo "<th class = \"info\" data-field=\"year\">YEAR</th>";
                	echo "<th class = \"info\" data-field=\"dept\">DEPARTMENT</th>";
                	echo "<th class = \"info\" data-field=\"sec\">SECTION</th>";
                	echo "<th class = \"info\" data-field=\"tname\">TEAM NAME</th>";
                	echo "<th class = \"info\" data-field=\"members\">TEAM MEMBERS LIST</th>";
                	                	
                 
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

      	$result = $db->query($sql);

      	

        if ($result->num_rows > 0) {
        
            while($row= $result->fetch_assoc()) {
   
                echo "<tr>";
                echo "<td class = \"info\">". $row["id"]."</td>";
                echo "<td class = \"info\">". $row["name"]. "</td>";
                echo "<td class = \"info\">". $row["year"]. "</td>";
                echo "<td class = \"info\">". $row["dept"]. "</td>";             
                echo "<td class = \"info\">". $row["sec"]. "</td>";
                echo "<td class = \"info\">". $row["tname"]. "</td>";
                echo "<td class = \"info\">". $row["members"]. "</td>";

                                                                    
                echo "</tr>";



            }
        }
        else{
        	echo " No Participants";
        }      	
     } 


      elseif ($eventName == "groupDance") 
      {
      	$sql = "SELECT l.name , l.id, l.year , l.dept, l.sec, e.tname , e.members   FROM login as l , groupDance as e WHERE l.id = e.id"; 

                echo "<table>
                      <thead>
                	  <tr>";

                	echo "<th class = \"info\" data-field=\"id\">USER ID</th>";
                	echo "<th class = \"info\" data-field=\"name\">NAME</th>";
                	echo "<th class = \"info\" data-field=\"year\">YEAR</th>";
                	echo "<th class = \"info\" data-field=\"dept\">DEPARTMENT</th>";
                	echo "<th class = \"info\" data-field=\"sec\">SECTION</th>";
                	echo "<th class = \"info\" data-field=\"tname\">TEAM NAME</th>";
                	echo "<th class = \"info\" data-field=\"members\">TEAM MEMBERS LIST</th>";
                	                	
                 
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

      	$result = $db->query($sql);

      

        if ($result->num_rows > 0) {
        
            while($row= $result->fetch_assoc()) {
   
                echo "<tr>";
                echo "<td class = \"info\">". $row["id"]."</td>";
                echo "<td class = \"info\">". $row["name"]. "</td>";
                echo "<td class = \"info\">". $row["year"]. "</td>";
                echo "<td class = \"info\">". $row["dept"]. "</td>";             
                echo "<td class = \"info\">". $row["sec"]. "</td>";
                echo "<td class = \"info\">". $row["tname"]. "</td>";
                echo "<td class = \"info\">". $row["members"]. "</td>";

                                                                    
                echo "</tr>";



            }
        }
        else{
        	echo " No Participants";
        }      	
     }


      elseif ($eventName == "quiz") 
      {
      	$sql = "SELECT l.name , l.id, l.year , l.dept, l.sec, e.tname , e.m1 , e.m2   FROM login as l , quiz as e WHERE l.id = e.id"; 

                echo "<table>
                      <thead>
                	  <tr>";

                	echo "<th class = \"info\" data-field=\"id\">USER ID</th>";
                	echo "<th class = \"info\" data-field=\"name\">NAME</th>";
                	echo "<th class = \"info\" data-field=\"year\">YEAR</th>";
                	echo "<th class = \"info\" data-field=\"dept\">DEPARTMENT</th>";
                	echo "<th class = \"info\" data-field=\"sec\">SECTION</th>";
                	echo "<th class = \"info\" data-field=\"tname\">TEAM NAME</th>";
                	echo "<th class = \"info\" data-field=\"m1\">TEAMMATE 1</th>";
                	echo "<th class = \"info\" data-field=\"m2\">TEAMMATE 2</th>";
                	                	
                 
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

      	$result = $db->query($sql);

      

        if ($result->num_rows > 0) {
        
            while($row= $result->fetch_assoc()) {
   
                echo "<tr>";
                echo "<td class = \"info\">". $row["id"]."</td>";
                echo "<td class = \"info\">". $row["name"]. "</td>";
                echo "<td class = \"info\">". $row["year"]. "</td>";
                echo "<td class = \"info\">". $row["dept"]. "</td>";             
                echo "<td class = \"info\">". $row["sec"]. "</td>";
                echo "<td class = \"info\">". $row["tname"]. "</td>";
                echo "<td class = \"info\">". $row["m1"]. "</td>";
                echo "<td class = \"info\">". $row["m2"]. "</td>";

                                                                    
                echo "</tr>";



            }
        }
        else{
        	echo " No Participants";
        }      	
     } 


      elseif ($eventName == "treasureHunt") 
      {
      	$sql = "SELECT l.name , l.id, l.year , l.dept, l.sec, e.tname , e.m1 , e.m2 ,e.m3 , e.m4 , e.m5  FROM login as l , treasureHunt as e WHERE l.id = e.id"; 

                echo "<table>
                      <thead>
                	  <tr>";

                	echo "<th class = \"info\" data-field=\"id\">USER ID</th>";
                	echo "<th class = \"info\" data-field=\"name\">NAME</th>";
                	echo "<th class = \"info\" data-field=\"year\">YEAR</th>";
                	echo "<th class = \"info\" data-field=\"dept\">DEPARTMENT</th>";
                	echo "<th class = \"info\" data-field=\"sec\">SECTION</th>";
                	echo "<th class = \"info\" data-field=\"tname\">TEAM NAME</th>";
                	echo "<th class = \"info\" data-field=\"m1\">TEAMMATE 1</th>";
                	echo "<th class = \"info\" data-field=\"m2\">TEAMMATE 2</th>";
                	echo "<th class = \"info\" data-field=\"m3\">TEAMMATE 3</th>";
                	echo "<th class = \"info\" data-field=\"m4\">TEAMMATE 4</th>";
                	echo "<th class = \"info\" data-field=\"m5\">TEAMMATE 5</th>";                	                	
                 
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

      	$result = $db->query($sql);

      	

        if ($result->num_rows > 0) {
        
            while($row= $result->fetch_assoc()) {
   
                echo "<tr>";
                echo "<td class = \"info\">". $row["id"]."</td>";
                echo "<td class = \"info\">". $row["name"]. "</td>";
                echo "<td class = \"info\">". $row["year"]. "</td>";
                echo "<td class = \"info\">". $row["dept"]. "</td>";             
                echo "<td class = \"info\">". $row["sec"]. "</td>";
                echo "<td class = \"info\">". $row["tname"]. "</td>";
                echo "<td class = \"info\">". $row["m1"]. "</td>";
                echo "<td class = \"info\">". $row["m2"]. "</td>";
                echo "<td class = \"info\">". $row["m3"]. "</td>";
                echo "<td class = \"info\">". $row["m4"]. "</td>";
                echo "<td class = \"info\">". $row["m5"]. "</td>";
                                                                    
                echo "</tr>";



            }
        }
        else{
        	echo " No Participants";
        }      	
     }               


      elseif ($eventName == "channelSurfing") 
      {
      	$sql = "SELECT l.name , l.id, l.year , l.dept, l.sec, e.tname , e.m1 , e.m2 ,e.m3 , e.m4 , e.m5  FROM login as l , channelSurfing as e WHERE l.id = e.id"; 

                echo "<table>
                      <thead>
                	  <tr>";

                	echo "<th class = \"info\" data-field=\"id\">USER ID</th>";
                	echo "<th class = \"info\" data-field=\"name\">NAME</th>";
                	echo "<th class = \"info\" data-field=\"year\">YEAR</th>";
                	echo "<th class = \"info\" data-field=\"dept\">DEPARTMENT</th>";
                	echo "<th class = \"info\" data-field=\"sec\">SECTION</th>";
                	echo "<th class = \"info\" data-field=\"tname\">TEAM NAME</th>";
                	echo "<th class = \"info\" data-field=\"m1\">TEAMMATE 1</th>";
                	echo "<th class = \"info\" data-field=\"m2\">TEAMMATE 2</th>";
                	echo "<th class = \"info\" data-field=\"m3\">TEAMMATE 3</th>";
                	echo "<th class = \"info\" data-field=\"m4\">TEAMMATE 4</th>";
                	echo "<th class = \"info\" data-field=\"m5\">TEAMMATE 5</th>";                	                	
                 
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";

      	$result = $db->query($sql);

      

        if ($result->num_rows > 0) {
        
            while($row= $result->fetch_assoc()) {
   
                echo "<tr>";
                echo "<td class = \"info\">". $row["id"]."</td>";
                echo "<td class = \"info\">". $row["name"]. "</td>";
                echo "<td class = \"info\">". $row["year"]. "</td>";
                echo "<td class = \"info\">". $row["dept"]. "</td>";             
                echo "<td class = \"info\">". $row["sec"]. "</td>";
                echo "<td class = \"info\">". $row["tname"]. "</td>";
                echo "<td class = \"info\">". $row["m1"]. "</td>";
                echo "<td class = \"info\">". $row["m2"]. "</td>";
                echo "<td class = \"info\">". $row["m3"]. "</td>";
                echo "<td class = \"info\">". $row["m4"]. "</td>";
                echo "<td class = \"info\">". $row["m5"]. "</td>";
                                                                    
                echo "</tr>";



            }
        }
        else{
        	echo " No Participants";
        }      	
     }


      elseif ($eventName == "cricket"){
      	$sql = "SELECT l.name , l.id, l.year , l.dept, l.sec, e.tname , e.m1 , e.m2 , e.m3 , e.m4 , e.m5 ,e.m6  FROM login as l , cricket as e WHERE l.id = e.id";
      	$result = $db->query($sql);

                echo "<table>
                      <thead>
                	  <tr>";

                	echo "<th class = \"info\" data-field=\"id\">USER ID</th>";
                	echo "<th class = \"info\" data-field=\"name\">NAME</th>";
                	echo "<th class = \"info\" data-field=\"year\">YEAR</th>";
                	echo "<th class = \"info\" data-field=\"dept\">DEPARTMENT</th>";
                	echo "<th class = \"info\" data-field=\"sec\">SECTION</th>";
                	echo "<th class = \"info\" data-field=\"tname\">TEAM NAME</th>";
                	echo "<th class = \"info\" data-field=\"m1\">TEAMMATE 1</th>";
                	echo "<th class = \"info\" data-field=\"m2\">TEAMMATE 2</th>";
                	echo "<th class = \"info\" data-field=\"m3\">TEAMMATE 3</th>";
                	echo "<th class = \"info\" data-field=\"m4\">TEAMMATE 4</th>";
                	echo "<th class = \"info\" data-field=\"m5\">TEAMMATE 5</th>";
                	echo "<th class = \"info\" data-field=\"m6\">TEAMMATE 6</th>";                	     
                echo "</tr>";
                echo "</thead>";
                echo "<tbody>";      	

      

        if ($result->num_rows > 0) {
        // output data of each row
            while($row= $result->fetch_assoc()) {

                echo "<tr>";
                echo "<td class = \"info\">". $row["id"]."</td>";
                echo "<td class = \"info\">". $row["name"]. "</td>";
                echo "<td class = \"info\">". $row["year"]. "</td>";
                echo "<td class = \"info\">". $row["dept"]. "</td>";             
                echo "<td class = \"info\">". $row["sec"]. "</td>";
                echo "<td class = \"info\">". $row["tname"]. "</td>";
                echo "<td class = \"info\">". $row["m1"]. "</td>";
                echo "<td class = \"info\">". $row["m2"]. "</td>";             
                echo "<td class = \"info\">". $row["m3"]. "</td>";
                echo "<td class = \"info\">". $row["m4"]. "</td>";             
                echo "<td class = \"info\">". $row["m5"]. "</td>";
                echo "<td class = \"info\">". $row["m6"]. "</td>";                                
                echo "</tr>";

            }
        }
        else{
        	echo " No Participants";
        }      	  
      }
      else{
      	echo "Wrong Option";
      }
    }
    else{
    echo "didnt get data from form";
}

echo "</tbody>";
echo "</table>";

?>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
</body>
</html>    

 