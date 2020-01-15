<?php
$servername   = 'localhost';
$database = 'stpinext';
$username = 'stpinextlocal';
$password = "stpinextloc";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
   die("Connection failed: " . $conn->connect_error);
}else{
  //echo "Connected successfully"; 
}
 session_start();
if (isset($_SESSION["username"])) {
	header("location:form.php");
}

#### Decrypt/Encrypt docode #####
function enc($str = ''){   //YWJj
	if($str != ""){
		return(base64_encode($str));
	}
}
function dec($str = ''){   //abc
	if($str != ""){
		return(base64_decode($str));
	}
} 
if (isset($_POST["lgnsubmit"])) {
	if (empty($_POST["username"]) && empty($_POST["password"])) {
		echo '<script>alert("Both fields are required")</script>';
	} else {

		$username = mysqli_escape_string($conn, $_POST["username"]);
		$password = mysqli_escape_string($conn, $_POST["password"]);
		$password = enc($password);
		/* if (empty($_SESSION['captcha_code']) || strcasecmp($_SESSION['captcha_code'], $_POST['captcha_code']) != 0) {
			echo '<script>alert("The captcha code code does not match!.")</script>';
			session_destroy();
			header("Location:signin.php");
		} */
		$query = "SELECT login_id, username, useremail, usercontact, status FROM stpinext_user_login WHERE useremail = '$username' AND userpassword = '$password' AND status = '1'";
		//echo $query; die; 
		$run_query = mysqli_query($conn, $query);
		if (mysqli_num_rows($run_query) > 0) {
			$result = mysqli_fetch_assoc($run_query);
			$user_id = $result['login_id'];
            date_default_timezone_set('Asia/Kolkata');
            $lgndate = date('d-m-Y H:i:s'); 
            $lgndateupdt = "UPDATE `stpinext_user_login` SET `last_login_date`= '$lgndate' WHERE login_id = $user_id";
            $runlgndate = mysqli_query($conn, $lgndateupdt);  
			$_SESSION['username'] = $user_id;
			header("Location:form.php");
		} else {
			echo '<script>alert("Wrong Username & Password. Please try again..")</script>';
		}
	}
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NGIS Login Page</title>
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <a href="http://ngis.stpi.in/" target="_blank" alt="Next Generation Incubation Scheme" title="Next Generation Incubation Scheme"><img src="assets/img/NGIS_STPI_1.png" />  </a>                          
                        </div>
                    </div>                   
                        <div class="col-sm-6 col-sm-offset-3 text">                        	
                        	<div class="">
	                        	<div class="form-top">
	                        		<div class="form-top-left">
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="username">Username</label>
				                        	<input type="text" name="username" placeholder="Username..." class="form-username form-control" id="form-username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="form-password">
				                        </div>                                        
                                            <button type="submit" class="btn col-sm-5" name="lgnsubmit">Sign in!</button>
                                            <br><br>
                                            <a class="btn btn-primary" href="signup.php">Sign Up</a>
                                            <!--<a class="btn btn-primary" href="forgotpassword.php" style="float:right;">Forgot Password</a>-->
				                    </form>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>        
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>        
    </body>
</html>