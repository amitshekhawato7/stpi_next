<?php
$applicatin_id = $_REQUEST['data']; 
?>

<!DOCTYPE html>
<html>
<header>

<div id="navbar">
	<div class="container">
		<div class="col-md-12">
			<div class="col-md-6" align="left">
				<img src="assets/img/NGIS_logo-02.png" id="ngis" onclick='window.open("http://ngis.stpi.in/");return false;' width="220"/>
			</div>
			<div class="col-md-6" align="right">
				<img src="assets/img/whte.png" id="stpi" onclick='window.open("https://www.stpi.in/");return false;' width="124"/>
			</div>
		</div>
	</div>
</div>
</header>
<head>
<meta http-equiv="refresh" content="10;url=logout.php" />
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/wavesurfer.js/1.1.2/wavesurfer.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<style>

.body{
	background-color:#fff !important;
}
.header {
  background-color: #0c1527;
  padding: 30px;
  text-align: center;
}

#navbar {
  overflow: hidden;
  background-color: #0c1527;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}

.content {
  padding: 16px;
}

.footer {
    background-color: #313131;
    color: white;
    line-height: 1.9em; 
}
#stpi
  {
    cursor:pointer;
  }
#ngis
  {
    cursor:pointer;
  }
</style>
</head>
<body>
 

<div class="jumbotron text-center content"  style="padding-top:75px;padding-bottom:55px;">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Your Apllication Id: <?php echo $applicatin_id; ?></strong></p>
  <p class="lead"><strong>Please check your email</strong> and wait for the announcement of the result of your start-up applicatin.</p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="http://ngis.stpi.in/" role="button">Continue to homepage</a>
  </p>
</div>
<footer>
<div class="col-md-12 footer" align="center">
<p>© 2019 STPINEXT. All rights reserved.</p>
</div>
</footer>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script> 

</body>
</html>