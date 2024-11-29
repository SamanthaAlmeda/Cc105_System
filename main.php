<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
<div class="panels">
<a href="#admin_form" id="login_pop"><img src="images/ad.png"  width="25px"  height= "25px"  title = "Admin"/></a>
<meta charset="utf-8" />
<title>OJT tracker</title>
  <link href="index.css" rel="stylesheet" type="text/css" />
</head>

<style>
body{
background:url(images/bg.jpg) no-repeat center top scroll;
background-size: 100%;
}
</style>

<body>
<div class="main">
<div class="panel">
<a href="#join_form" id="join_pop">Log Out</a>
<a href="#login_form" id="login_pop">&nbsp Log In &nbsp</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<div>
  
 <center> <canvas id="canvas" width="180" height="180"
style="background-color:white">	
</canvas></center>

 <center><div style="color:black"> <h3><color="white" id="clock" > &nbsp;</div></h3></color></center>
  
<a href="#x" class="overlay" id="admin_head"></a>

<div class="popup">

<center><h2>Admin</h2></center>

<br>
	
<div>
<form action="../admin_head/login.php" method="post"> 
<label><b>Username</b></label>

<input type="text" name="username" id="login" value="" />

</div>

<div>

<label><b>Password</b></label>

<input type="password" name ="password" id="password" value="" />

</div>

  <center> <input type="submit"  class="btn" name="login" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp" class="btn btn-primary"/></center>
			   </form>
<a class="close" href="#close"></a>



</div>


<a href="#x" class="overlay" id="admin_form"></a>

<div class="popup">

<center><h2>Administrator</h2></center>

<br>
	
<div>
<form action="login.php" method="post"> 
<label><b>Username</b></label>

<input type="text" name="username" id="login" value="" />

</div>

<div>

<label><b>Password</b></label>

<input type="password" name ="password" id="password" value="" />

</div>

  <center> <input type="submit"  class="btn" name="login" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp" class="btn btn-primary"/></center>
			   </form>
<a class="close" href="#close"></a>



</div>


<!-- popup form #1 -->

<a href="#x" class="overlay" id="login_form"></a>

<div class="popup">

<center><h2>Login Form</h2></center>
<br>

<div>
<form action="in_db.php" method="POST">
<label><b>ID Number</b></label>

<input type="text"   id="Id_number" name="id"  required="required"  />

</div>
<div>
	<b><label>Remarks</label></b>
		
            <select name="remarks"   value="Remarks"class="select2_single form-control"  text-align = "center" required="required" tabindex="-1" >
            <option value="Log In"> Log In</option>
             <option value="Early Log In"> Early Log in</option>
											
              </select>
                                    </div>


<br>
 <center> <input type="submit"  class="btn" name="submit1" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Login &nbsp;&nbsp;&nbsp;&nbsp;&nbsp" class="btn btn-primary"/></center>
			   </form>

<a class="close" href="#close"></a>

</div>





<a href="#x" class="overlay" id="join_form"></a>

<div class="popup">

<form action="out_db.php" method="POST">

<center><h2>Log Out Form</h2></center>
<br>



<div>

<b><label>ID Number</label></b>

<input type="text" id="Id_Number" name="id"  required="required" />

</div>
<div>
<b><label>Remarks</label></b>
					
      <select name="remarks" id="remarks" value="Remarks"class="select2_single form-control" required="required" tabindex="-1"  >
        <option value="Log Out"> Log Out</option>
         <option value="Early Log Out">Early Log Out</option>
		<option value="Overtime">OverTime</option>
											
           </select>
		   </div>
<div>

<label><b>Note</b></label>

  <textarea id="pass" name="Note"   class="form-control"  maxlength="500"></textarea>

</div>



 <center> <input type="submit"  class="btn" name="submit1" value="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Logout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp" class="btn btn-primary"/></center>
			   </form>

<a class="close" href="#close"></a>
</div>
<style>

.main {
  background: white ;
  width: 800px 	;
  height: 500px ;
  margin: 80px auto;

}

.panel {
	font: 23px normal arial;
  background-color: lightblue;
  height: 35px;
    padding: 10px;
}

.panels {
	font: 17px normal arial;
  background-color:transparent;
  padding: 10px;

}

.panels a#login_pop, .panel a#join_pop {
  border: 1px solid gray;
  color: black;
  display: block;
  float: right;
  margin-right: 10px;
  padding: 5px 10px;
  text-shadow: 1px gray;
  border-radius: 10px;
}

a#login_pop:hover, a#join_pop:hover {
  border-color: white;
}

.overlay {
  position: fixed;
  right: 0;
  top: 0;
  visibility: hidden;
  z-index: 1;
}

.popup {
    background-color: steelblue;
    font-size: 20px;
    display: inline-block;
    left: 50%;
    opacity: 0;
    padding: 15px;
    position: fixed;
    text-align: justify;
    bottom: 0; 
    visibility: hidden;
    z-index: 10;
    transform: translate(-50%, 100%); 
    border-radius: 10px;
    box-shadow: 0 1px 1px 2px rgba(0, 0, 0, 0.4) inset;
    transition: opacity .5s, bottom .5s;
}

.overlay:target + .popup {
    bottom: 50%; 
    opacity: 1;
    visibility: visible;
    transform: translate(-50%, 50%); 
}

.close {
    background-color: transparent;
    height: 30px;
    line-height: 30px;
    position: absolute;
    right: -0px; 
    text-align: center;
    top: -1px; 
    width: 30px;
    font-size: 20px;
    font-weight: bold;
    border-radius: 10px;
}

.close:before {
  color: white;
  content: "x";
  font-size: 25px;
  text-shadow:black;
}

.close:hover {
  background-color: red;
}

.popup p, .popup div {
  margin-bottom: 30px;
}

.popup label {
  display: inline-block;
  text-align: left;
  width: 100px;
}

.popup input[type="text"], .popup input[type="password"] {
  text-align: center;
  height:25px;
  border-color: steelblue;
  margin: 0;
  padding: 2px;
  border-radius: 2px;
}
 
.popup select {
  border: 1px solid blue;
  background-color: white;
	text-align: center;
	height:30px;
	width:175px;
}

.popup-select option{
  border: 1px solid blue;
  background-color: aliceblue;
	text-align: center;
	height:30px;
	width:175px;
}

.popup textarea{
  height:60px;		
	width: 173px;
	background: aliceblue;
	font-size: 12px;
	color:black;	
}

a { 
	text-decoration:none; 
}

h2 {
    font-weight:700;
    color:white;
    font-size:20px;
}

h2, p {
	margin-bottom:5px;
}

.clock{
	
	background-color:transparent;
}
</style>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.86
setInterval(drawClock, 1500);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');

  grad.addColorStop(1, 'white');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = 'black';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>

<br>

<html>
<head>

<script>
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
</head>



   
</body>
</html>

