<?php
header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
header("Pragma: no-cache"); // HTTP 1.0.
header("Expires: 0"); // Proxies.  
?>
<!DOCTYPE html>
<html ng-app="highways">
<head>

	<title>Highways2k17-Home</title>
  <link rel="icon" type="image/png" href="images/Favicon.png">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <!--<meta name="viewport" content="ce-tial-scale=1.0, maximum-scale=1.0">-->
  <meta http-equiv="pragma" content="no-cache" />	
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>   
  <link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
<body onload="Materialize.toast('Welcome,<br>1.Sign up<br>2.Login<br>3.Register for the events of your choice<br>4.It is enough for 1 individual to register this team for group events<br>5.Please add your name as well to team members list when you register for team events<br>6.Just click on the register button to register for individual events', 4000)">


  <section id="competition" ng-controller="EventsController as events">

    <div id="city" ng-init="events.controlScrolling()">
<!--
<div class="navbar-fixed" >
    <nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">&nbsp;&nbsp;Highways2k17</a>
      <ul id="top" class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light btn" data-target="login">Login </a></li>
        <li><a class="waves-effect waves-light btn " data-target="signup">Sign-Up</a></li>
      </ul>
    </div>
  </nav>
  </div>
<div>
-->
<div class="navbar-fixed">
  <nav>
    <div class="nav-wrapper">
    <a href="index.php" class="brand-logo">&nbsp;&nbsp;Highways2k17</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons" id="triple">menu</i></a>
      <ul class="right hide-on-med-and-down">
      <li><a class="waves-effect waves-light btn" href="#help">Help</a></li>
        <li><a class="waves-effect waves-light btn" data-target="login">Login </a></li>
        <li><a class="waves-effect waves-light btn " data-target="signup">Sign-Up</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
      <li><a class="waves-effect waves-light btn" href="#help">Help</a></li>
        <li><a class="waves-effect waves-light btn" data-target="login">Login </a></li>
        <li><a class="waves-effect waves-light btn " data-target="signup">Sign-Up</a></li>
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

<img id="car" src="images/Bus.png">
</div>
<div>
	<!--<a href="#modal1"><img id="e1" class="events" src="images/Adzap.png"></a>-->
	<img id="e2" class="events" src="images/FIFA.png">
	<button id="b1" data-target="ev2" class="btn">+</button>
</div>
<div>
	<img id="e1" class="events" src="images/ChannelSurfing.png">
  <button id="b2" data-target="modal1" class="btn">+</button>
</div>
<div>
	<img id="e4" class="events" src="images/AdaptTunes.png">
  <button id="b3" data-target="ev4" class="btn">+</button>

</div>
<div>
	<img id="e3" class="events" src="images/COD.png">
  <button id="b4" data-target="ev3" class="btn">+</button>

</div>
<div>
	<img id="e5" class="events" src="images/Cricket.png">
  <button id="b5" data-target="ev5" class="btn">+</button>

</div>
<div>
	<img id="e6" class="events" src="images/Foosball.png">
  <button id="b6" data-target="ev6" class="btn">+</button>

</div>
<div>
	<img id="e7" class="events" src="images/Fun.png">
  <button id="b7" data-target="ev7" class="btn">+</button>

</div>
<div>
	<img id="e8" class="events" src="images/GroupDance.png">
  <button id="b8" data-target="ev8" class="btn">+</button>

</div>
<div>
	<img id="e9" class="events" src="images/Masterchef.png">
  <button id="b9" data-target="ev9" class="btn">+</button>

</div>
<div>
	<img id="e10" class="events" src="images/Music.png">
  <button id="b10" data-target="ev10" class="btn">+</button>

</div>
<img id="e11" class="events" src="images/Photography.png">
<button id="b11" data-target="ev11" class="btn">+</button>

</div>
<img id="e12" class="events" src="images/Quiz.png">
<button id="b12" data-target="ev12" class="btn">+</button>

</div>
<img id="e13" class="events" src="images/Shipwreck.png">
<button id="b13" data-target="ev13" class="btn">+</button>

</div>
<img id="e14" class="events" src="images/Spotlight.png">
<button id="b14" data-target="ev14" class="btn">+</button>

</div>
<img id="e15" class="events" src="images/TreasureHunt.png">
<button id="b15" data-target="ev15" class="btn">+</button>

</div>				
</div>
<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>FIFA</h4>
    <div class="sec1">          
      Venue: CS Lab<br>
      Coordinator: Naresh<br> 
      Contact: 9789081263<br>
      Time: 11:00 - 02:00<br>
    </div>
    <p class="sec2">
      * 5 minutes per half<br>
      * Weather conditions - Overcast<br>
      *Version is FIFA 17<br> 
      * Only Tactical Defending will be allowed<br> 
      * Play can be paused only by the player who has possession of the ball<br>
      * If neither of the teams score a winning goal after 90' of play, the game must move straight to penalties<br>
      * Abusive language directed towards the opposition will lead to disqualification 
      Good luck and happy gaming!<br>
      *Format: Direct Knockout. <br>
      *Participants are recommended to get their own controllers. <br>
      *Participants are responsible for any equipment in the hall.<br>

    </p>
  </div>
  <div class="modal-footer">

    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

  </div>
</div>
<div id="ev2" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Channel Surfing</h4>
    <div class="sec1">
      Venue: Function Hall<br> 
      Coordinators: Bharath Kowshik</br>
      Contact: 9445699119 </br>
      Time : 11:30 - 01:30
    </div>
    <p class="sec2">
      We all love our idiot boxes , don't we? So be our idiot box for few minutes ,as the judges put your team to test by naming different channels , the team should act out the scenes in various channels. The most creative , well synchronized and humorous performances will be named winners .
      Prelims will be held written test if there are high number of registrations </br>
      Rules </br>
      * High vulgarity will not be tolerated</br>
      * Team of not more than 5</br>
      *Team members can be from different departments or years</br>
      * Time limit per round : not more than 5mins</br>
    </p>
  </div>
  <div class="modal-footer">

    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

  </div>
</div>

<div id="ev3" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Adapt Tunes</h4>
    <div class="sec1">
      Venue: Multipurpose Hall<br>
      Coordinator: Ajay<br>
      Contact: 9894624169<br>
      Time: 1:45 - 3:30 
    </div>
    <p class="sec2">
      Rules:<br>
      *It is a Solo Event .<br>
      *Participants must adapt to the song as they continue to change.<br>
      *Judges decision will be final. <br>

    </p>
  </div>
  <div class="modal-footer">
    <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

  </div>
</div>
<div id="ev4" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>COD</h4>
    <div class="sec1">
      Venue: CS Lab <br>
      Coordinator: Sohit<br>
      Contact: 9629138167 <br>
      Time: 11:00 - 2:00<br>
    </div>
    <p class="sec2">
     *5v5<br>
     *Remaining Rules will be explained on spot<br>

   </p>
 </div>
 <div class="modal-footer">
  <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
  <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

</div>
</div>
<div id="ev5" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Cricket</h4>
    <div class="sec1">
      Venue: Basketball Court<br>
      Coordinator 1: Hari<br>
      Contact: 9500114579<br>
      Coordinator 2: Rajesh<br>
      Contact:8098028310<br>
      Time: 10:00 - 12:00

    </div>
    <p class="sec2">
     Rules:<br>       
          *Six per team<br>
          *5 overs per innings<br>
          *only under arm<br>
          (Regarding runs it will be informed to the participants before the match) </p>
   </div>
   <div class="modal-footer">
    <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

  </div>
</div>
<div id="ev6" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Foosball</h4>
    <div class="sec1">
      Venue: OAT<br>
      Coordinator: Niranjan<br>
      Contact: 9566047193<br>
      Time: 10:00 - 12:00<br>
    </div>

    <p class="sec2">
      GENERAL RULES <br>
      • The game is just like table top foosball but with real people.<br> 
      • Players will face the opposite team’s goal <br>
      • Players need to get in position and hold onto the PVC pole with both hands all the time. <br>
      • Players will be tied to the foosball pole by their waist with a belt. They cannot step outside of the marked area.<br>
      • The game starts by rolling the ball into play from the mid-court starting area. <br>
      • Play continues until a penalty occurs, the ball is out of reach or out of bounds, or a goal is missed, or is scored. Follow restart procedures to continue playing. <br>
      • Players must move together from side to side. However, no player (except the goalie) is permitted to move forward or backward on the court in a marked movement zone.<br> 
      • Players and Goalies can’t use their hands. If they let go of the foosball pole and touch the ball with their arms or hands, it will be a penalty and that player will receive a yellow card.<br>
      • Soccer ball must remain below the foosball pole at all times. 
      • When a penalty occurs, the ball should be placed at the feet of one of the forwards of the non-offending team. <br>
      • No kicking or attempting to kick an opponent.<br> 
      • No tripping or attempting to trip an opponent <br>
      • Players on the ground are considered “radioactive” – they are not to be touched and should not be active in the play until they are on their feet.<br> 
      • Verbal, physical abuse to another player or the referee will not be tolerated.
      •Game time is 10 minutes, no maximum points.⁠⁠⁠⁠<br>
    </p>
  </div>
  <div class="modal-footer">
    <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

  </div>
</div>
<div id="ev7" class="modal modal-fixed-footer">
  <div class="modal-content">
    <h4>Fun Events</h4>
    <div class="sec1">
      Venue: OAT<br>
      Coordinator: Merlin<br>
      Contact: 9444708261<br>
      Time: 10:00-2:00<br>


    </div>
    <p class="sec2">
      <table>
        <tbody>
          <tr>
            <td >
              <p><strong>No</strong></p>
            </td>
            <td >
              <p><strong>Games</strong></p>
            </td>
            <td >
              <p><strong>Description</strong></p>
            </td>
            <td >
              <p><strong>Max Players</strong></p>
            </td>
            <td >
              <p><strong>Coordinators</strong></p>
            </td>
          </tr>
          <tr>
            <td >
              <p>1</p>
            </td>
            <td >
              <p>Arm Wrestling</p>
            </td>
            <td ">
              <p>Involves two participants. Each places one arm on a surface with their elbows bent and touching the surface, and they grip each other's hand. The goal is to pin the other's arm onto the surface, the winner's arm over the loser's arm.</p>
            </td>
            <td >
              <p>2</p>
            </td>
            <td >
              <p>Deepak &amp; Team</p>
            </td>
          </tr>
          <tr>
            <td >
              <p>2</p>
            </td>
            <td >
              <p>Tug of War</p>
            </td>
            <td >
              <p>Two teams pull at opposite ends of a rope the team that drags the other over a central line is declared as winners.</p>
            </td>
            <td >
              <p>6 per team</p>
            </td>
            <td >
              <p>Abhishek &amp; Team</p>
            </td>
          </tr>
          <tr>
            <td >
              <p>3</p>
            </td>
            <td >
              <p>Maathi Yosi - Think Different</p>
            </td>
            <td >
              <p>Player must provide completely unrelated answers to each questions post to them</p>
            </td>
            <td >
              <p>1</p>
            </td>
            <td >
              <p>Santhosh &amp; Team</p>
            </td>
          </tr>
          <tr>
            <td >
              <p>4</p>
            </td>
            <td >
              <p>Bombing the City</p>
            </td>
            <td >
              <p>The place is divided into four corners and each identified as a city. The four cities are written down separately on small pieces of paper, which are carefully folded, shuffled and placed in a bowl. As the music plays, the participants have to walk in a circle covering all the four cities. The moment the music stops, they have to choose a city to rest in. When all the participants are settled in their respectable cities, a non-playing member has to randomly pick up a piece of paper from the bowl. The city thus picked up, is declared bombed. The participants of the bombed city are eliminated and the game continues with the remaining participants. The player, who manages to survive till the end, emerges the winner.</p>
            </td>
            <td >
              <p>&nbsp;</p>
            </td>
            <td >
              <p>Pavithra &amp; Team</p>
            </td>
          </tr>
          <tr>
            <td >
              <p>5</p>
            </td>
            <td >
              <p>Dumb Charades</p>
            </td>
            <td >
              <p>The Player act out the phrase/name by using different gestures, facial expressions, and body language to his/her teammates who had to find it.</p>
            </td>
            <td >
              <p>2-3</p>
            </td>
            <td >
              <p>Harini &amp; Team</p>
            </td>
          </tr>
          <tr>
            <td >
              <p>6</p>
            </td>
            <td >
              <p>Bounce It</p>
            </td>
            <td >
              <p>Participants attempts to bounce seven pencils off of their&nbsp;<em>erasers</em>&nbsp;and into 7 cups within a minute</p>
            </td>
            <td >
              <p>1</p>
            </td>
            <td >
              <p>Durairaj &amp; Team</p>
            </td>
          </tr>
          <tr>
            <td >
              <p>8</p>
            </td>
            <td >
              <p>Blind Makeup</p>
            </td>
            <td >
              <p>The teammate whose eyes are blindfolded will do makeup for his/her co teammate within the stipulated time</p>
            </td>
            <td >
              <p>2</p>
            </td>
            <td >
              <p>Kamalapriya &amp; Team</p>
            </td>
          </tr>
          <tr>
            <td >
              <p>9</p>
            </td>
            <td >
              <p>Oiye Selfie</p>
            </td>
            <td >
              <p>The participants must take selfie with the thing as mentioned in the lot he/she picked up within the stipulated time</p>
            </td>
            <td >
              <p>2</p>
            </td>
            <td >
              <p>Devika &amp; Team</p>
            </td>
          </tr>
          <tr>
            <td >
              <p>10</p>
            </td>
            <td >
              <p>Pictorials</p>
            </td>
            <td >
              <p>One of the team mates must sketch the object to the Co- teammate that he/she picked from the lot and the team which gives out the correct answer based on sketch within the stipulated time is declared as the winners.</p>
            </td>
            <td >
              <p>2</p>
            </td>
            <td >
              <p>Tasleemara &amp; Team</p>
            </td>
          </tr>
        </tbody>
      </table> </p>
    </div>
    <div class="modal-footer">
      <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

    </div>
  </div>
  <div id="ev8" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Group Dance</h4>
      <div class="sec1">
        Venue: Multipurpose Hall<br>
        Coordinator: Ajay<br>
        Contact: 9894624169<br>
        Time: 1:45 - 3:30<br>

      </div>
      <p class = "sec2">



        Group Dance :<br>
        *Each team should have a minimum of three people <br>
        *the song limit should not be more than five mins<br>
        *Points will b considered for costumes,music,creativity<br>
        *Judges decision will be final<br> </p>
      </div>
      <div class="modal-footer">
        <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

      </div>
    </div>
    <div id="ev9" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Masterchef</h4>
        <div class="sec1">
          Venue: Classroom Block 2<br>
          Coordinator: Amrutha<br>
          Contact : 9283749419<br>
          Time: 10:00 - 03:00<br>
        </div>
        <p class="sec2">

         Rules:</br>

         1. A team of 2 members can participate.</br>
         2. Participants are required to be present 15 mins prior to the commencement.</br>
         3.All dishes should be vegetarian.</br>
         4. Participants should maintain cleanliness by all means.</br>
         5. Raw materials/ingredients should be hygienic.</br>
         6. Criteria of judgement: Hygiene,Presentation,Apperance,Taste.</br>

         Prelims:</br>
         Writtern Test/Online test if more than 20 teams register</br>

         Concept:Cooking without Fire</br>

         1. You should not use any ready-made items instead of bread,biscuits,chocolate,Tinned/canned/boiled raw materials.</br>
         2. You should make 2 dishes with different taste.</br>
         3. Time duration is 45minutes.</br>
         4. Judges decision is final.</br>

         *Top 10 teams will be selected to Finals*</br>

         Finals:</br>

         Concept: Mystery Box Challenge.</br>

         *Participants will be given 10 minutes for discussing the idea of the dish*</br>

         1. You can make dishes of any cuisine from the Mystery Box.</br>
         2. You should use every ingredients in the Mystery Box.</br>
         3. You can use induction stove to cook the dishes.</br>
         4. Time duration is 1 hour.</br>
         5. Judges decision is final.</br></p>
       </div>
       <div class="modal-footer">
        <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

      </div>
    </div> <div id="ev10" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Band Music</h4>
      <div class="sec1">
        Venue: Multipurpose Hall<br>
        Coordinator: Shyam Ravishankar<br>
        Contact: 9940014046<br>
        Time: 10:00 - 12:00<br>
      </div>
      <p class ="sec2">
        Rules:<br>
        *A team should consist of 2 or more people.<br>
        *Bring your own instruments.<br>
        Furthur details contact coordinator.<br>
      </p>
    </div>
    <div class="modal-footer">
      <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

    </div>
  </div>
  <div id="ev11" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Photography</h4>
      <div class="sec1">
        Venue: Video Hall<br>
        Coordinator 1: B.Praveen babu<br>
        Contact: 9444903595<br>
        Coordinator 2: Avinash<br>
        Contact: 9840775453<br>
      </div>

      <p class="sec2">
        1. Impress us with your skills ( open theme for the first round ) .<br>

        2. Strictly no plagiarism .<br>

        3.Send your entries to
        highways17.photography@gmail.com<br>

        4. Send your entries with your Name , Year , Department & Contact number.<br>

        5. Only one entry per
        participant.<br>

        6. Winners will be selected by the juries.<br>

        7. Last date to send the entries is 31-03-2017. <br>
        8. Final display at 2:30-3:00 in Video Hall <br>


      </p>
    </div>
    <div class="modal-footer">
      <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

    </div>
  </div>
  <div id="ev12" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Quiz</h4>
      <div class="sec1">
        Venue: Classroom Block 2<br>
        Coordinator: Abhishek<br>
        Contact: 9884610889<br>
        Time: 11:30 - 02:30<br>
      </div>
      <p class="sec2">
        Rules:<br>
        *General quiz consisting of 2 per team.<br>
        *Preliminary round with 20 questions.<br>
        *Built-in tiebreakers.<br> 
        *Top 6 teams qualify.<br>
      </p>
    </div>
    <div class="modal-footer">
      <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

    </div>
  </div>
  <div id="ev13" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Shipwreck</h4>
      <div class="sec1">
        Venue: Video Hall<br>
        Coordinator: Varun<br>
        Contact: 7299966880<br>
        Time: 11-00 - 01:00<br>
      </div>

      <p class="sec2">
        Rules:<br>
        *Participants should not assassinate the character<br>
        *No offensive languages should be used<br>
        *Should convince the captain in 3 minutes<br>

      </p>
    </div>
    <div class="modal-footer">
      <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

    </div>
  </div>
  <div id="ev14" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Spotlight</h4>
      <div class="sec1">
        Venue: Multipurpose Hall<br>
        Coordinator: Shruthika<br>
        Contact: 9840798661<br>
        Time: 12:15 - 01:45<br>
      </div>
      <p class="sec2">
        Description:<br>
        Show Your talent on the stage of svce, may it be dance,music or even magic tricks. May the spotlight be on you. </p>
      </div>
      <div class="modal-footer">
        <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

      </div>
    </div>
    <div id="ev15" class="modal modal-fixed-footer">
      <div class="modal-content">
        <h4>Treasure Hunt</h4>
        <div class="sec1">
          Venue: EG Hall<br>
          Coordinator: Shravya<br>
          Contact: 9840544705<br>
          Time: 09:00 - 10:00<br>
        </div>
        <p class="sec2">
          Team Size : </br>4-5 members</br>
          The teams will be given a clue, which when solved will lead to a series of subsequent puzzles and a new </br>
          location. The clues will be hidden around the areas in our college. Teams should hunt for the </br>
          clues and return with the treasure. The team which does this job first is the winner. </br>
          Event Format: Each of the team turning up will be given a clue which can lead to different places of the </br>
          Venue. Almost all the places of campus will be used. The aim of the participant is to find the treasure </br>
          trove as soon as possible. The event will consist of two rounds: 
          Prelims:(Round 1)</br>
          (1) A quiz competition will be conducted for the preliminary round by the department. </br>
          (2) Number of questions will be 20 and the time period will be 20 minutes. </br>
          (3) The teams which gets the highest marks will be selected to the main event.</br>

          Note: The quiz should be completed within the estimated time and avoid Browsing or involving in Mall practicing</br>
          The questions will be simple.</br>
          Round 2 (Final):</br>
          (1) Teams have to reach the treasure by way of gathering the clues planted by organizers. </br>
          (2) All the clues found by participant during the hunt must be submitted to the organizers at the end of 
          the event; only then the team will be eligible for judgment. </br>
          (3) The teams will get the successive clue from the place that the current one leads to. </br>
          (4) The treasure hunt should be completed within the time or less than that and the duration for the hunt 
          will be announced on the spot. 
          (5) The team that reached out to the treasure FIRST will be the winner. 
          Rules and regulations: </br>
          (1) There will be two rounds. Top( 6-8 ) teams from round 1 will qualify for the final round and will compete for 
          winner position. </br>
          (2) The Team who will complete the task before other teams will be selected as the winning team. </br>
          (3) In case, if no team is able to find the treasure, then team with maximum number of clues with solution will 
          be selected as winner. </br>
          (4) In case of any discrepancies (disclosing or destroying of clues etc.), the team will be disqualified. </br>
          (5) There should be a fair play and teams found seeking help from outsiders will be disqualified. </br>
          (6) Coordinators will reserve the rights to disqualify any team during the event in case of any discrepancy.</br>
        </p>
      </div>
      <div class="modal-footer">
        <!--<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>-->
        <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

      </div>
    </div>
    <div id="login" class="modal modal-fixed-footer">
      <form action="login.php" method="POST">
        <div class="modal-content">

          <h4>Login</h4>
          <label> Username:<input type="text" name="myusername"/></label>
          <label> Password:<input type="password" name="mypassword"/></label>


        </div>
        <div class="modal-footer">
          <!--<input href="#!" class="modal-action modal-close waves-effect waves-green btn-flat " type="submit"/>-->
          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Close</a>

        </div>
      </form>
    </div>

    <div id="signup" class="modal modal-fixed-footer ">
     <div class=".input-field">
       <form action="signup.php" method="POST" name="vali" > <!-- onsubmit="return event.validate(this);" -->
         <div class="modal-content">

          <h4>Signup </h4>
          <label>Name:<input type="text" name="sign_name" required /></label>

          <div class="input-field col s12">
            <select required name="dept">
              <option value="" disabled selected ></option>
              <option value="CSE">CSE</option>
              <option value="BIOTECH">BIOTECH</option>
              <option value="CIVIL">CIVIL</option>
              <option value="EEE">EEE</option>
              <option value="ECE">ECE</option>
              <option value="MECH">MECH</option>
              <option value="AUTOMOBILE">AUTOMOBILE</option>
              <option value="MARINE">MARINE</option>
              <option value="CHEM">CHEM</option>
              <option value="IT">IT</option>
            </select>
            <label>Department</label>
          </div>
          <div class="input-field col s12">
            <select required name="year">
              <option value="" disabled selected></option>
              <option value="I">I</option>
              <option value="II">II</option>
              <option value="III">III</option>
              <option value="IV">IV</option>

            </select>
            <label>Year</label>
          </div>
          <div class="input-field col s12">
            <select required name="sec">
              <option value="" disabled selected></option>
              <option value="A"> A</option>
              <option value="B">B</option>
              <option value="C">C</option>
            </select>
            <label>Section</label>
          </div>
          <label>Username:<input type="text" name="sign_user_name" pattern=".{6,15}" required placeholder="Enter 6 - 15 charecters"/></label>
          <label>Password:<input type="password" name="sign_pass" pattern=".{6,15}" required placeholder="Enter 6 - 15 charecters"/></label>


        </div>
        <div class="modal-footer">
          <!--<input  class="modal-action  waves-effect waves-green btn-flat " type="submit"  />-->
                    <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
          </button>
          <!-- ng-click = "return events.validate(this);" -->
          <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat " >Close</a>

        </div>
      </form>
    </div>
  </div>
</section>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>


</body>
</html>