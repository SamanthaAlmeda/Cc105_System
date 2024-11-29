<?php
	session_start();
	if(ISSET($_SESSION['id'])){
	echo "<script>alert('Please Log out to secure your Account!'); window.location='home.php'</script>";
	}
?>

<html lang="en" >

<head>

<meta charset="utf-8" />

<title>OJT  -  DTR	</title>

<link href="css/layout.css" rel="stylesheet" type="text/css" />

<link href="css/modal.css" rel="stylesheet" type="text/css" />

</head>

<body background = "images/12345.jpg">



<div class="main">



<div class="panel">
	
  
	

<a href="#join_form" id="join_pop">Log Out</a>
<a href="#login_form" id="login_pop">&nbsp Log In &nbsp</a>
<a href="#admin_form" id="login_pop"> &nbsp Admin &nbsp  </a>


</div>

</div>
<a href="#x" class="overlay" id="admin_form"></a>

<div class="popup">

<h2>Administrator</h2>


	
<div>
<form action="login.php" method="post"> 
<label for="login">Username</label>

<input type="text" name="username" id="login" value="" />

</div>

<div>

<label for="password">Password</label>

<input type="password" name ="password" id="password" value="" />

</div>

  <center> <input type="submit"  class="btn" name="login" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp" class="btn btn-primary"/></center>
			   </form>
<a class="close" href="#close"></a>

</div>


<!-- popup form #1 -->

<a href="#x" class="overlay" id="login_form"></a>

<div class="popup">

<h2>Login Form</h2>


<div>

<label for="login">ID Number</label>

<input type="text" id="login" value="" />

</div>


<div>

<label for="pass">Note</label>

  <textarea id="pass" name="Note"   class="form-control" maxlength="500"/></textarea>

</div>
<input type="button" value="Log In" />

<a class="close" href="#close"></a>

</div>

<a href="#x" class="overlay" id="join_form"></a>

<div class="popup">

<h2>Log Out Form</h2>

<p>Please enter your ID number here</p>

<div>

<label for="email">ID Number</label>

<input type="text" id="email" value="" />

</div>

<div>

<label for="pass">Note</label>

  <textarea id="pass" name="Note"   class="form-control" maxlength="500"/></textarea>

</div>



<input type="button" value="Sign Up" />&nbsp;&nbsp;&nbsp;</a>

<a class="close" href="#close"></a>

</div>



<style>
	.main {

background: #141414 url(images/atis1.jpg) no-repeat  	;

width: 800px;

height: 500px;

margin: 50px auto;

}

.panel {
	font: 1.2em normal arial;

background-color:#1dabf9;

height: 34px;

padding: 10px;


}

.panel a#login_pop, .panel a#join_pop {

border: 2px solid #aaa;

color: black;

display: block;

float: right;

margin-right: 10px;

padding: 5px 10px;
text-decoration: none;

text-shadow: 1px 1px #000;

-webkit-border-radius: 10px;

-moz-border-radius: 10px;

-ms-border-radius: 10px;

-o-border-radius: 10px;

border-radius: 10px;

}

a#login_pop:hover, a#join_pop:hover {

border-color: #eee;

}

.overlay {

background-color: rgba(0, 0, 0, 0.6);

bottom: 0;

cursor: default;

left: 0;

opacity: 0;

position: fixed;
right: 0;

top: 0;

visibility: hidden;

z-index: 1;

-webkit-transition: opacity .5s;

-moz-transition: opacity .5s;

-ms-transition: opacity .5s;

-o-transition: opacity .5s;

transition: opacity .5s;

}

.overlay:target {

visibility: visible;

opacity: 1;

}

.popup {

background-color: #1dabf9;

border: 3px solid #fff;

display: inline-block;

left: 50%;

opacity: 0;

padding: 15px;
position: fixed;
text-align: justify;
top: 40%;
visibility: hidden;

z-index: 10;

-webkit-transform: translate(-50%, -50%);

-moz-transform: translate(-50%, -50%);

-ms-transform: translate(-50%, -50%);

-o-transform: translate(-50%, -50%);

transform: translate(-50%, -50%);

-webkit-border-radius: 10px;

-moz-border-radius: 10px;

-ms-border-radius: 10px;

-o-border-radius: 10px;

border-radius: 10px;

-webkit-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

-moz-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
-ms-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

-o-box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;

-webkit-transition: opacity .5s, top .5s;

-moz-transition: opacity .5s, top .5s;

-ms-transition: opacity .5s, top .5s;

-o-transition: opacity .5s, top .5s;

transition: opacity .5s, top .5s;

}

.overlay:target+.popup {

top: 50%;

opacity: 1;

visibility: visible;

}

.close {

background-color: rgba(0, 0, 0, 0.8);

height: 30px;

line-height: 30px;

position: absolute;

right: 0;

text-align: center;

text-decoration: none;

top: -15px;

width: 30px;
-webkit-border-radius: 15px;

-moz-border-radius: 15px;

-ms-border-radius: 15px;

-o-border-radius: 15px;

border-radius: 15px;

}

.close:before {

color: rgba(255, 255, 255, 0.9);

content: "X";

font-size: 24px;

text-shadow: 0 -1px rgba(0, 0, 0, 0.9);

}

.close:hover {

background-color: rgba(64, 128, 128, 0.8);

}

.popup p, .popup div {

margin-bottom: 10px;

}

.popup label {

display: inline-block;

text-align: left;

width: 120px;

}

.popup input[type="text"], .popup input[type="password"] {

border: 1px solid;

border-color: #999 #ccc #ccc;

margin: 0;

padding: 2px;

-webkit-border-radius: 2px;

-moz-border-radius: 2px;

-ms-border-radius: 2px;

-o-border-radius: 2px;

border-radius: 2px;

}

.popup input[type="text"]:hover, .popup input[type="password"]:hover {

border-color: #555 #888 #888;

}
}
div.gallery {
    margin: 10px;
    border: 0px solid #ccc;
    float: left;
    width: 300px;
}



div.desc {
	
    padding: 30px;
    text-align: center;
}


	

a { 
	text-decoration:none; 
	color:#00c6ff;
}

h1 {
	font: 5em normal Arial, Helvetica, sans-serif;
	padding: 20px;	margin: 0;
	text-align:center;
}

h1 small{
	font: 0.2em normal  Arial, Helvetica, sans-serif;
	text-transform:uppercase; letter-spacing: 0.2em; line-height: 5em;
	display: block;
}

h2 {
    font-weight:700;
    color:blue;
    font-size:20px;
}

h2, p {
	margin-bottom:5px;
}

@font-face {
    font-family: 'BebasNeueRegular';
    src: url('BebasNeue-webfont.eot');
    src: url('BebasNeue-webfont.eot?#iefix') format('embedded-opentype'),
         url('BebasNeue-webfont.woff') format('woff'),
         url('BebasNeue-webfont.ttf') format('truetype'),
         url('BebasNeue-webfont.svg#BebasNeueRegular') format('svg');
    font-weight: normal;
    font-style: normal;

}

.container {width: 960px; margin: 0 auto; overflow: hidden;}

.clock {width:800px; margin:0 auto; padding:30px; border:1px ; color:#3498db; }

#Date { font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; font-size:15px; text-align:center; text-shadow:0 0 0px #00c6ff; }

ul { width:400px; margin:0 auto; padding:0px; list-style:none; text-align:center; }
ul li { display:inline; font-size:2em; text-align:center; font-family:'BebasNeueRegular', Arial, Helvetica, sans-serif; text-shadow:0 0 0px #00c6ff; }

#point { position:relative; -moz-animation:mymove 1s ease infinite; -webkit-animation:mymove 1s ease infinite; padding-left:10px; padding-right:10px; }

@-webkit-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 0px #00c6ff; }	
}


@-moz-keyframes mymove 
{
0% {opacity:1.0; text-shadow:0 0 20px #00c6ff;}
50% {opacity:0; text-shadow:none; }
100% {opacity:1.0; text-shadow:0 0 20px #00c6ff; }	
}

</style>
<div id="Date"></div>

 
<ul>
	<li id="clock"> </li>
  
	
	
</ul>
						
<center>	
<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
// Create two variable with the names of the months and days in an array
var monthNames = [ "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December" ]; 
var dayNames= ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"]

// Create a newDate() object
var newDate = new Date();
// Extract the current date from Date object
newDate.setDate(newDate.getDate());
// Output the day, date, month and year    
$('#Date').html(dayNames[newDate.getDay()] + " " + newDate.getDate() + ' ' + monthNames[newDate.getMonth()] + ' ' + newDate.getFullYear());

setInterval( function() {
	// Create a newDate() object and extract the seconds of the current time on the visitor's
	var seconds = new Date().getSeconds();
	// Add a leading zero to seconds value
	$("#sec").html(( seconds < 10 ? "0" : "" ) + seconds);
	},1000);
	
setInterval( function() {
	// Create a newDate() object and extract the minutes of the current time on the visitor's
	var minutes = new Date().getMinutes();
	// Add a leading zero to the minutes value
	$("#min").html(( minutes < 10 ? "0" : "" ) + minutes);
    },1000);
	
setInterval( function() {
	// Create a newDate() object and extract the hours of the current time on the visitor's
	var hours = new Date().getHours();
	// Add a leading zero to the hours value
	$("#hours").html(( hours < 10 ? "0" : "" ) + hours);
    }, 1000);
	
}); 


var d = new Date(<?php echo time() * 1000 ?>);

function updateClock() {
  // Increment the date
  d.setTime(d.getTime() + 1000);

  // Translate time to pieces
  var currentHours = d.getHours();
  var currentMinutes = d.getMinutes();
  var currentSeconds = d.getSeconds();

  // Add the beginning zero to minutes and seconds if needed
  currentMinutes = (currentMinutes < 10 ? "0" : "") + currentMinutes;
  currentSeconds = (currentSeconds < 10 ? "0" : "") + currentSeconds;

  // Determine the meridian
  var meridian = (currentHours < 12) ? "am" : "pm";

  // Convert the hours out of 24-hour time
  currentHours = (currentHours > 12) ? currentHours - 12 : currentHours;
  currentHours = (currentHours == 0) ? 12 : currentHours;

  // Generate the display string
  var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " " + meridian;

  // Update the time
  document.getElementById("clock").firstChild.nodeValue = currentTimeString;
}

window.onload = function() {
  updateClock();
  setInterval('updateClock()', 1000);
}
</script>
<link rel="canonical" href="http://www.alessioatzeni.com/wp-content/tutorials/jquery/CSS3-digital-clock/index.html" />
</head>

	
</ul>

</body>

</html>
