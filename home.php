<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.5.0-web/css/all.css">
<link rel="stylesheet" type="text/css" href="css/travel_trails.css">
<link rel="shortcut icon" type="image/x-icon" href="images/logo.ico" />
<title>Travel Trails</title>
<style>
</style>
</head>

<script type="text/javascript" src="JS/loading.js"></script>
<body style="background-image:url('images/homepagebg.jpg');background-position: center;" >

<header>
<div class="mainhead">
  <canvas id="myCanvas" width="1200px;">Your Browser does not support canvas</canvas>
</div>

<ul>
  <li class="nav"><a href="#" class="active">Home</a></li>
  <li class="nav"><a href="search.php">Search</a></li>
  <li class="nav"><a href="contact.html">Contact</a></li>
  <li class="nav"><a href="about.html">About</a></li>
  <li class="nav" style="float: right;"><button onclick="document.getElementById('modal').style.display='block'" class="navlogbtn" 
  style="width:auto;">Login</button></li>
  <li class="nav" style="float: right;"><a href="entryform.php">Submit a Review</a></li>
</ul>
</header>

<div class="homecontainer">
<p style="font-size: 24px;"><i>
Ever wanted to travel to a place but not sure if it's right for you? We've got you covered. We aim to provide you reviews of places that travel enthusiasts and tourists have visited letting you to decide which place you should go to for your next trip. Hygiene, cuisine, pricing, anything and everything you need to know about a location before visiting, reviewed by your own fellow tourists!<br><br>
With that said, Happy Trails fellow travellers, and we hope to see your review on our website soon!</i>
</p>
</div>

<div>

  <p style="text-align: center; font-family:'Impact'; font-size:40px; color: black; ">Featured Reviews</p>

<a href="listing/gatesofheaven_bali.html">
<div class="listingcontainer">
  <h3>Bali</h3>
  Gates of Heaven<br><br>
<span class="fa fa-star" style="color: orange;"></span>
<span class="fa fa-star" style="color: orange;"></span>
<span class="fa fa-star" style="color: orange;"></span>
<span class="fa fa-star" style="color: orange;"></span>
<span class="fa fa-star" style="color: orange;"></span>
</div>
</a>

<a href="listing/christtheredeemer_brazil.html">
<div class="listingcontainer">
  <h3>Brazil</h3>
  Christ the Redeemer<br><br>
<span class="fa fa-star" style="color: orange;"></span>
<span class="fa fa-star" style="color: orange;"></span>
<span class="fa fa-star" style="color: orange;"></span>
<span class="fa fa-star" style="color: orange;"></span>
<span class="fa fa-star" ></span>
</div>
</a>

<a href="listing/eiffeltower_france.html" >
<div class="listingcontainer">
  <h3>France</h3>
  Eiffel Tower<br><br>
<span class="fa fa-star" style="color: orange;"></span>
<span class="fa fa-star" style="color: orange;"></span>
<span class="fa fa-star" style="color: orange;"></span>
<span class="fa fa-star" ></span>
<span class="fa fa-star" ></span>
</div>
</a>
</div>


<button class="navlogbtn" style="margin-top:500px;" onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

<div class="mainhead" style="text-align: center;color: black;font-size: 30px;">
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
</html>