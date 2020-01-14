<?php
$servername   = 'localhost';
$database = 'stpinext';
$username = 'stpinext';
$password = "stpinext@123";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
   die("Connection failed: " . $conn->connect_error);
}else{
  //echo "Connected successfully"; 
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
session_start();
if (isset($_SESSION["username"])) {
	header("location:form.php");
}
if (isset($_POST["submit"])) {
	$pass1 = $_POST["password"];
	$pass2 = $_POST["cnfrmpass"];
	if (empty($_POST["email"]) && empty($_POST["password"])) {
		echo '<script>alert("Please fill all required fields")</script>';
	} else if($pass1 != $pass2){
		echo '<script>alert("Password do not match..")</script>';
	}else{ 
		$username = mysqli_escape_string($conn, $_POST["username"]);
		$email = mysqli_escape_string($conn, $_POST["email"]);
		$password = mysqli_escape_string($conn, $_POST["password"]);
		$password = enc($password);
		$contact = mysqli_escape_string($conn, $_POST["contact"]); 
		$status = 1;
		//$activationcode = md5($email . time());

		$sql = "SELECT useremail FROM stpinext_user_login WHERE useremail = '$email'";
		$sqlresult = mysqli_query($conn, $sql);
		if (mysqli_num_rows($sqlresult) > 0) {
			echo '<script>alert("Error: User is already registered. Please try another email..")</script>';
		} else {
			$query = "INSERT INTO stpinext_user_login (username, useremail, userpassword, usercontact, status) VALUES('$username', '$email', '$password', '$contact', '$status')";
			//echo $query;die;
				if (mysqli_query($conn, $query)) {
					echo "<script>alert('Registration successful, please apply now..')</script>";
					echo "<script>window.location = 'form.php';</script>";
					// echo 'sent'; 

				}				
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
        <title>User Register for NGIS</title>
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
                            <a href="http://ngis.stpi.in/" target="_blank" alt="Next Generation Incubation Scheme" title="Next Generation Incubation Scheme"><img src="assets/img/NGIS_STPI_1.png"/></a>
                        </div>
                    </div>                    
                  
                        <div class="col-sm-6 col-sm-offset-3 text">
                        <div class="">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Sign up now</h3>
                                    <p>Enter your details to get instant access:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-pencil"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="" method="post" class="registration-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="name">First name</label>
                                        <input type="text" name="username" placeholder="Enter Your Full Name" class="form-first-name form-control" id="form-first-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="email">Email Id</label>
                                        <input type="text" name="email" placeholder="Enter Your Email" class="form-first-name form-control" id="form-first-name">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="contact">Contact</label>
                                        <input type="text" name="contact" placeholder="Enter Your Contact" class="form-email form-control" id="form-email">
                                    </div>
                                    <!--<div class="form-group">
                                        <label class="sr-only" for="company">Company</label>
                                        <input type="text" name="company" placeholder="Enter Your Company Name" class="form-email form-control" id="form-email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="designation">Designation</label>
                                        <input type="text" name="designation" placeholder="Enter Your Designation" class="form-email form-control" id="form-email">
                                    </div>-->
                                    <div class="form-group">
                                        <label class="sr-only" for="password">Password</label>
                                        <input type="password" name="password" placeholder="Enter Your Password" class="form-email form-control" id="form-email">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="cnfrmpass">Confirm Password</label>
                                        <input type="password" name="cnfrmpass" placeholder="Confirm Your Password" class="form-email form-control" id="form-email">
                                    </div> 
                                    <button type="submit" class="btn" name="submit">Sign me up!</button>
                                    <br><br>
                                    <a class="btn btn-primary" href="signin.php">Sign In</a>
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