<!DOCTYPE html>
<html>
<head>
	<title>Travel Trails</title>
	<link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.5.0-web/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/travel_trails.css">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo.ico" />
</head>
<style>

.formbox{
	background-color: #FFFFFF;
	margin-left: 300px;
	margin-right: 300px;
	margin-top: 100px;
	border-radius:15px;
	border-style: solid;
	width: 670px;
	opacity: 0.9;
	padding: 30px;
	box-shadow: 10px 10px 0px rgba(0,0,0,0.5);
	font-size: 15px;
}


.header{
	font: 400 50px/1.3 'Oleo Script', Helvetica, sans-serif;
	color: black;
	text-shadow: 4px 4px 0px rgba(0,0,0,0.1);
}

.slider {
    -webkit-appearance: none;  
    outline: none;
    width: 50%; 
    height: 25px; 
    background: #d3d3d3; 
    opacity: 0.7; 
    -webkit-transition: .2s; /* 0.2 seconds transition on hover */
    float: right;
}

/* Mouse-over effects */
.slider:hover {
    opacity: 1; /* Fully shown on mouse-over */
}

.slider::-webkit-slider-thumb {
    -webkit-appearance: none; /* Override default look */
    width: 25px; /* Set a specific slider handle width */
    height: 25px; /* Slider handle height */
    background: black; /* Green background */
    cursor: pointer; /* Cursor on hover */
    border-radius: 50%;
}

.fa{
	cursor: pointer;
}



</style>
	
<script type="text/javascript" src="JS/loading.js"></script>

<body style="background-color: #001a33;">
<header>

<div class="mainhead">
  <canvas id="myCanvas" width="1200px;">Your Browser does not support canvas</canvas>
</div>

<ul>
  <li class="nav"><a href="home.php">Home</a></li>
  <li class="nav"><a href="search.php">Search</a></li>
  <li class="nav"><a href="contact.html">Contact</a></li>
  <li class="nav"><a href="about.html">About</a></li>
  <li class="nav" style="float: right;"><button onclick="document.getElementById('modal').style.display='block'" class="navlogbtn" 
  style="width:auto;">Login</button></li>
  <li class="nav" style="float: right;"><a href="entryform.php" class="active">Submit a Review</a></li>
</ul>
</header>


<p align="center" class="header" style="color: white;">Tell us about your travel experiences!</p>

<form class="formbox" enctype="multipart/form-data" method="POST" id="revform" action="insert_form.php">
	<label for="username" style="margin-left: 20px;">Enter your name:</label>
	<input name="username" type="text" placeholder="Enter your name here" class="loginfield" style="margin: 10px; width: 74%;" required>
	<br><br>

	<label for="location" style="margin-left: 20px;">Enter the tourist location you visited:</label>
	<input name="location" type="text" placeholder="Enter location visited:" class="loginfield" style="margin: 10px; width: 55%;" required>
	<br><br>
	<label for="country" style="margin-left: 20px;">Choose country:</label>  
	<select  name="country" class="loginfield" style="width:60%; font-size: 15px;" required>
		<option style="text-align: center;">India</option>
		<option>USA</option>
		<option>Bali</option>
		<option>Italy</option>
		<option>Switzerland</option>
		<option>Singapore</option>
		<option>UAE</option>
		<option>France</option>
		<option>Other</option>				
	</select><br><br>

	<label for="datevisited" style="margin-left: 20px;">Enter the date when you visited:</label>
	<input name="datevisited" type="date" placeholder="Enter location visited:" class="loginfield" style="margin: 10px; width: 55%;" required>
	<br><br>

	<div style="margin-left: 20px;">
	<label for="review">Write a short review describing the place you went to, things you particularly enjoyed and things which fellow travellers should be aware of before visiting. </label>
	</div><br>
	<textarea rows="20" cols="85" style="margin-left: 10px; margin-right: 10px; background-color: white; resize: none;" name="review">
	</textarea>
	<br><br>

	<div style="font-size: 20px;">
	<label for="hygiene" style="margin-left: 20px;">Hygiene: &nbsp;&nbsp;&nbsp;<span id="hygieneval"></span>/10</label>
	<input name="hygiene" type="range" min="0" max="10" value="5" class="slider" id="hygiene"><br><br><br>

	<label for="hospitality" style="margin-left: 20px;">Hospitality: &nbsp;&nbsp;&nbsp;<span id="hospitval"></span>/10</label>
	<input name="hospitality" type="range" min="0" max="10" value="5" class="slider" id="hospitality"><br><br><br>

	<label for="pricing" style="margin-left: 20px;">Pricing: &nbsp;&nbsp;&nbsp;<span id="pricingval"></span>/10</label>	
	<input name="pricing" type="range" min="0" max="10" value="5" class="slider" id="pricing"><br><br><br>

	<label for="food" style="margin-left: 20px;">Food: &nbsp;&nbsp;&nbsp;<span id="foodval"></span>/10</label>	
	<input name="food" type="range" min="0" max="10" value="5" class="slider" id="food"><br><br><br><br><br>

	<label for="file-upload" class="navlogbtn" style="margin-left: 270px;" >Upload Image</label>
	<input type="file" name="file-upload" id="file-upload" style="display: none;" placeholder="No file selected">
	<span id="uploadFile"></span>
	</div>

	<div style="cursor: pointer;">
	<span class="fa fa-star checked" style="margin-left: 275px; margin-top:50px; " id="1" onclick="updateRating(this)">
	</span>
	<span class="fa fa-star" id="2" onclick="updateRating(this)"></span>
	<span class="fa fa-star" id="3" onclick="updateRating(this)"></span>
	<span class="fa fa-star" id="4" onclick="updateRating(this)"></span>
	<span class="fa fa-star" id="5" onclick="updateRating(this)"></span>
</div>

<button type="submit" class="navlogbtn" style="margin-top:50px;" >Submit</button>
</form>


<button class="navlogbtn" style="margin-top:200px;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div class="mainhead" style=" text-align: center;color: black;font-size: 30px;">
<i class="fab fa-instagram"></i>
<i class="fab fa-facebook"></i>
<i class="fab fa-snapchat"></i>
<i class="fab fa-pinterest"></i>
<i class="fab fa-linkedin"></i>
<i class="fab fa-twitter"></i>     
</div>


<div id="modal" class="modal">
  
  <form class="modal-content animate" action="loginverify.php" method="POST" enctype="multipart/form-data">
    
    <div class="imgcontainer">
      <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="logincontainer">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" class="loginfield" required >

      <label for="psw" style="padding-top: 16px;"><b>Password</b></label>
      <input type="password" style="margin-bottom: 20px;" placeholder="Enter Password" name="psw" class="loginfield" required>
        
      <button type="button" onclick="location.href='register.html'" class="modalbtn">Register</button>
      <button type="submit" class="modalbtn">Login</button>
    </div>
  </form>

</div>


</body>
<script type="text/javascript" src="JS/canvas.js"></script>
<script type="text/javascript" src="JS/modal.js"></script>

<script>

var hygslider = document.getElementById("hygiene");
var hygoutput = document.getElementById("hygieneval");
hygoutput.innerHTML = hygslider.value;
hygslider.oninput = function() {
  hygoutput.innerHTML = this.value;
}

var hospslider = document.getElementById("hospitality");
var hospoutput = document.getElementById("hospitval");
hospoutput.innerHTML = hospslider.value;
hospslider.oninput = function() {
  hospoutput.innerHTML = this.value;
}

var prislider = document.getElementById("pricing");
var prioutput = document.getElementById("pricingval");
prioutput.innerHTML = prislider.value;
prislider.oninput = function() {
  prioutput.innerHTML = this.value;
}

var fooslider = document.getElementById("food");
var foooutput = document.getElementById("foodval");
foooutput.innerHTML = fooslider.value;
fooslider.oninput = function() {
  foooutput.innerHTML = this.value;
}

function updateRating(event){
	for (i=0;i<event.id;i++){
		var star = document.getElementsByClassName('fa-star')[i];
		star.classList.add("checked");
	}
	for (i=event.id;i<5;i++){
		star = document.getElementsByClassName('fa-star')[i];
		star.classList.remove("checked");
	}	
}

document.getElementById("file-upload").onchange = function() {
	var filepath = this.value;
	filepatharray=filepath.split('\\');
	filename=filepatharray[filepatharray.length-1];
  document.getElementById("uploadFile").innerHTML = filename;
};

</script>

</html> 