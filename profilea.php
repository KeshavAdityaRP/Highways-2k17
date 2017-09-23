<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.  
include('session.php'); 
?>
<!DOCTYPE html>
<html ng-app="highways">
<head>
	<title>Highways2k17-Admin Profile</title>
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
  <form action="adminScreen.php" method="GET" ng-controller="EventsController as events">
<!--
          <label> Username:<input type="text" name="myusername"/></label>
          <label> Password:<input type="password" name="mypassword"/></label>
        -->
        <div class="row">
          <div class="col s8 offset-s2">
            <h1>Welcome Admin</h1>
          </div>
        </div>
        <div class="row">
          <div class="col s8 offset-s2">
            <p>Feel free to view the participants list for each of your events here.</p>
          </div>
        </div>
        <div class="row">
         <div class="col s5 offset-s2">
           <div class="input-field ">
             <select name="event" required><!--onchange="showUser(this.value,'participantDetails','adminDisplay.php?q=')"-->
              <option value="" disabled selected>Select Event</option>
              <option value="spotlight">Spotlight</option>
              <option value="adaptTunes">Adapt Tunes</option>
              <option value="groupDance">Group Dance</option>
              <option value="bandMusic">Band Music</option>
              <option value="foosball">Foosball</option> 
              <option value="masterchef">Masterchef</option>

              <option value="shipwreck">Shipwreck</option>
              <option value="photography">Photography</option>
              <option value="cod">Call of Duty</option>
              <option value="fifa">Fifa</option>
              <option value="quiz">Quiz</option> 
              <option value="cricket">Cricket</option>
              <option value="treasureHunt">Treasure Hunt</option>
              <option value="channelSurfing">Channel Surfing</option>                 
            </select>
            <label>Participants Details</label>
          </div>
        </div> 
      </div>
      <div class="row">
        <div class="col s4 offset-s2">
          <!--<input href="#!" class="modal-action modal-close waves-effect waves-green btn-flat " type="submit"/>-->
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
        </div>
      </div>    
    </form>
    <div class="row">
      <div class="col s4 offset-s2">
        <a href="index1.php" class="waves-effect waves-light btn">Back to Home</a>
      </div>
    </div>   
  </div>




  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
  <script type="text/javascript" src="js/javascript.js"></script> 
</body>
</html>