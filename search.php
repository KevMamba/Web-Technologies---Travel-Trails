<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/fontawesome-free-5.5.0-web/css/all.css">
<link rel="stylesheet" type="text/css" href="css/travel_trails.css">
<link rel="shortcut icon" type="image/x-icon" href="images/logo.ico" />
<title>Travel Trails</title>
<style>

.search_container{
  margin: 200px 200px;
  padding: 30px 15px;
}

.search_font{
  font-size: 50px;
  font-family: Impact;
  color: white;
  margin-right: 50px;
}

.search_input{
  width: 500px;
  font-family: Impact;
  font-size: 50px; 
}


</style>
</head>

<script type="text/javascript" src="JS/loading.js"></script>
<body style="background-color: #001a33;" >

<header>
<div class="mainhead">
  <canvas id="myCanvas" width="1200px;">Your Browser does not support canvas</canvas>
</div>

<ul>
  <li class="nav"><a href="home.php">Home</a></li>
  <li class="nav"><a href="#" class="active">Search</a></li>
  <li class="nav"><a href="contact.html">Contact</a></li>
  <li class="nav"><a href="about.html">About</a></li>
  <li class="nav" style="float: right;"><button onclick="document.getElementById('modal').style.display='block'" class="navlogbtn" 
  style="width:auto;">Login</button></li>
  <li class="nav" style="float: right;"><a href="entryform.php">Submit a Review</a></li>
</ul>
</header>





<div class="search_container">
<form action="/action_page.php" method="post">
  <div style="width:90%;display: flex;" >
    <div style="display: flex;">
    <span class="search_font" >Search</span>
    </div>
    <input type="text" class="search_input">
    <button class="navlogbtn" style="max-width: 100px;" type="submit">Go</button> 
  </div>
  </div>

</form>
</div>




  <p class="search_font" style="text-align: center;">Featured Reviews</p>

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

<a href="listing/eiffel_france.html" >
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