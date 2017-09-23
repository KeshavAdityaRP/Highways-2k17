<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.   
include('session.php');

?>
<!DOCTYPE html>
<html ng-app="highways">
<head>
	<title>Highways2k17-User Profile</title>
  <link rel="icon" type="image/png" href="images/Favicon.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta http-equiv="pragma" content="no-cache" />	
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>   
  <link rel="stylesheet" type="text/css" href="css/userStyle.css">	
</head>
<body>


<div class="navbar-fixed" ng-controller="EventsController as events">
  <nav>
    <div class="nav-wrapper">
      <a href="index1.php" class="brand-logo">&nbsp;&nbsp;Highways2k17</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" id="triple">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a class="waves-effect waves-light btn" href="#help">Help</a></li>
        <li><a href="profilep.php" class="waves-effect waves-light btn">hi <?php echo $login_session; ?></a></li>
        <li><a href="logout.php" class="waves-effect waves-light btn">Sign Out</a></li> 
      </ul>
      <ul class="side-nav" id="mobile-demo">
      <li><a class="waves-effect waves-light btn" href="#help">Help</a></li>
        <li><a href="profilep.php" class="waves-effect waves-light btn">hi <?php echo $login_session; ?></a></li>
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
<!--
          <label> Username:<input type="text" name="myusername"/></label>
          <label> Password:<input type="password" name="mypassword"/></label>
        -->
        <div class="row">
          <div class="col s8 offset-s2">
            <h1>Welcome <?php echo $login_session; ?></h1>
          </div>
        </div>



        <?php
        echo "<div class=\"row\">";
        echo "<div class=\"col s12 offset-s2\">";
        $sql = "SELECT name , year , dept , sec FROM login WHERE id = '$login_session'";
        $result = $db->query($sql);

        if (($result->num_rows) > 0) {


        // output data of each row
          while($row= $result->fetch_assoc()) {

            echo "<p>
            <span>Name :</span> " . $row["name"].
            "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Year :</span> " . $row["year"].
            "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Department :</span> " . $row["dept"].
            "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Section</span> : " . $row["sec"].
            "</p>"; 
                     /*
                echo "<p>Year : " "</p>";
                echo "<p>Department : " . $row["dept"]."</p>";
                echo "<p>Section : " . $row["sec"]."</p>";
                echo "<br><p>Do sign up for more !</p>";*/              
              }
            }
            else{
              echo "Details currently unavailable";
            }

            echo "</div>";
            echo "</div>";
            ?>

            <div class="row">
              <div class="col s8 offset-s2">
                <p>Thank you for being apart of Highways 2k17 at Sri Venkateswara College of Engineering. The various events you have registered for are</p> 
              </div>
            </div>

            <?php
            echo "<div class=\"row\">";
            echo "<div class=\"col s12 offset-s2\">";  
            $sql = "SELECT spotlight , adaptTunes , groupDance , bandMusic , foosball , masterchef , shipwreck , photography , cod , fifa , quiz , cricket , treasureHunt , channelSurfing FROM events WHERE (spotlight = 'spotlight' or adaptTunes = 'adaptTunes' or groupDance = 'groupDance' or bandMusic = 'bandMusic' or foosball = 'foosball' or masterchef = 'masterchef' or shipwreck = 'shipwreck' or photography = 'photography' or cod = 'cod' or fifa = 'fifa' or quiz = 'quiz' or cricket = 'cricket' or treasureHunt = 'treasureHunt' or channelSurfing = 'channelSurfing') and id = '$login_session'"; 
  #echo $sql;
            $result = $db->query($sql);

            if (($result->num_rows) > 0) {


        // output data of each row
              while($row= $result->fetch_assoc()) {

                echo "<p class=\"eventList\"> " . $row["spotlight"]."</p>"; 
                echo "<p class=\"eventList\"> " . $row["adaptTunes"]."</p>";
                echo "<p class=\"eventList\"> " . $row["groupDance"]."</p>";
                echo "<p class=\"eventList\"> " . $row["bandMusic"]."</p>";
                echo "<p class=\"eventList\"> " . $row["foosball"]."</p>";
                echo "<p class=\"eventList\"> " . $row["masterchef"]."</p>"; 
                echo "<p class=\"eventList\"> " . $row["shipwreck"]."</p>";
                echo "<p class=\"eventList\"> " . $row["photography"]."</p>";
                echo "<p class=\"eventList\"> " . $row["cod"]."</p>";
                echo "<p class=\"eventList\"> " . $row["fifa"]."</p>";
                echo "<p class=\"eventList\"> " . $row["quiz"]."</p>"; 
                echo "<p class=\"eventList\"> " . $row["cricket"]."</p>";
                echo "<p class=\"eventList\"> " . $row["treasureHunt"]."</p>";
                echo "<p class=\"eventList\"> " . $row["channelSurfing"]."</p>";                                 

              }
            }
            else{
              echo "You Haven't registered for any of the events so far. Go back to our home page to register";
            }
/*
      $sql = "SELECT event3 , event4   FROM events WHERE (event3 = 'reg') or (event4 = 'reg') and id = '$login_session'"; 
  echo $sql;
  $result = $db->query($sql);

          if (($result->num_rows) > 0) {


        // output data of each row
            while($row= $result->fetch_assoc()) {
              echo "<div class=\"row\">";
              echo "<div class=\"col s12 m12 l12\">";
                echo "<p> " . $row["event3"]."</p>";
                echo "<p> " . $row["event4"]."</p>";                
                echo "</div>";
                echo "</div>";              

            }
          }
          else{
            echo "You Haven't registered for any of the events so far";
          }  


      $sql = "SELECT events5  FROM events WHERE event5 = 'reg' and id = '$login_session'"; 
  echo $sql;
  $result = $db->query($sql);

          if (($result->num_rows) > 0) {


        // output data of each row
            while($row= $result->fetch_assoc()) {
              echo "<div class=\"row\">";
              echo "<div class=\"col s12 m12 l12\">";
                echo "<p> " . $row["event5"]."</p>";               
                echo "</div>";
                echo "</div>";              

            }
          }
          else{
            echo "You Haven't registered for any of the events so far";
          }
*/        echo "<br><p>Do sign up for more !</p>";
          echo "</div>";
          echo "</div>";

          ?>
<!--
  <div class="row">
  <div class="col s4 offset-s2">
  <a href="index1.php" class="waves-effect waves-light btn">Back to Home</a>
  </div>
  </div>    
-->   
</div>




<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script> 
</body>
</html>