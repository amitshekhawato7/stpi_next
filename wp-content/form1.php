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

session_start();
if (!isset($_SESSION["username"])) {
	header("location:signin.php");
}  
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<!-- MultiStep Form --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<style>
/*custom font*/
@import url(https://fonts.googleapis.com/css?family=Montserrat);

/*basic reset*/
* {
    margin: 0;
    padding: 0;
}

html {
    height: 100%;
    background: #6441A5; /* fallback for old browsers */
    background: -webkit-linear-gradient(to left, #6441A5, #2a0845); /* Chrome 10-25, Safari 5.1-6 */
}

body {
    font-family: montserrat, arial, verdana;
    background: transparent;
}

/*form styles*/
#msform {
    text-align: center;
    position: relative;
    margin-top: 30px;
}

#msform fieldset {
    background: white;
    border: 0 none;
    border-radius: 0px;
    box-shadow: 0 0 15px 1px rgba(0, 0, 0, 0.4);
    padding: 20px 30px;
    box-sizing: border-box;
    width: 80%;
    margin: 0 10%;

    /*stacking fieldsets above each other*/
    position: relative;
}

/*Hide all except first fieldset*/
#msform fieldset:not(:first-of-type) {
    display: none;
}

/*inputs*/
#msform input, #msform textarea, #msform select {
    padding: 15px;
    border: 1px solid #ccc;
    border-radius: 0px;
    margin-bottom: 10px;
    width: 100%;
    box-sizing: border-box;
    font-family: montserrat;
    color: #2C3E50;
    font-size: 13px;
}

#msform input:focus, #msform textarea:focus, #msform select:focus{
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #ee0979;
    outline-width: 0;
    transition: All 0.5s ease-in;
    -webkit-transition: All 0.5s ease-in;
    -moz-transition: All 0.5s ease-in;
    -o-transition: All 0.5s ease-in;
}

/*buttons*/
#msform .action-button {
    width: 100px;
    background: #ee0979;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button:hover, #msform .action-button:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #ee0979;
}

#msform .action-button-previous {
    width: 100px;
    background: #C5C5F1;
    font-weight: bold;
    color: white;
    border: 0 none;
    border-radius: 25px;
    cursor: pointer;
    padding: 10px 5px;
    margin: 10px 5px;
}

#msform .action-button-previous:hover, #msform .action-button-previous:focus {
    box-shadow: 0 0 0 2px white, 0 0 0 3px #C5C5F1;
}

/*headings*/
.fs-title {
    font-size: 18px;
    text-transform: uppercase;
    color: #2C3E50;
    margin-bottom: 10px;
    letter-spacing: 2px;
    font-weight: bold;
}

.fs-subtitle {
    font-weight: normal;
    font-size: 13px;
    color: #666;
    margin-bottom: 20px;
}

/*progressbar*/
#progressbar {
    margin-bottom: 30px;
    overflow: hidden;
    /*CSS counters to number the steps*/
    counter-reset: step;
}

#progressbar li {
    list-style-type: none;
    color: white;
    text-transform: uppercase;
    font-size: 9px;
    width: 25%;
    float: left;
    position: relative;
    letter-spacing: 1px;
}

#progressbar li:before {
    content: counter(step);
    counter-increment: step;
    width: 24px;
    height: 24px;
    line-height: 26px;
    display: block;
    font-size: 12px;
    color: #333;
    background: white;
    border-radius: 25px;
    margin: 0 auto 10px auto;
}

/*progressbar connectors*/
#progressbar li:after {
    content: '';
    width: 100%;
    height: 2px;
    background: white;
    position: absolute;
    left: -50%;
    top: 9px;
    z-index: -1; /*put it behind the numbers*/
}

#progressbar li:first-child:after {
    /*connector not needed before the first step*/
    content: none;
}

/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before, #progressbar li.active:after {
    background: #ee0979;
    color: white;
}
 /* Customize the label (the container) */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 17px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #cacaca;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
 
body {
    font-family: montserrat, arial, verdana;
    background: transparent;
}
 
.footer {
    background-color: #0c1527;
    color: white;
    line-height: 1.9em; 
	margin-top:20px;
	position: sticky;
    bottom: 0;
}
.fixedElement { 
    position:fixed;
    top:0;
    width:100%;
    z-index:100;
	background-color: #0c1527;
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
<?php
	include 'phpmailer/class.phpmailer.php';
	//print_r($_POST);
	$login_id = $_SESSION["username"]; 
	$userquery = "SELECT username from stpinext_user_login where login_id = $login_id";
	//echo $userquery;
	$runuserquery = mysqli_query($conn, $userquery);
	//echo $login_id;
	$rsltuserquery = mysqli_fetch_assoc($runuserquery);
?>
<?php
if(isset($_POST['submit']))
	
{ 
	if (!empty($_POST["startupname"])) 
        {	  
			function unique_code($limit)
			{
			  return substr(base_convert(sha1(uniqid(mt_rand())), 16, 36), 0, $limit);
			}
			$application_id = 'NGIS'.unique_code(12); 
			$startupname = $_POST["startupname"];
			$cin = $_POST["cin"];
			$dpiit = $_POST["dpiit"];
            $building = $_POST["building"]; 
            $street = $_POST["street"];
            $city = $_POST["city"];
            $state = $_POST["state"]; 
            $country = $_POST["country"];
            $pin = $_POST["pin"];
            $person = $_POST["person"];
            $persondesignation = $_POST["persondesignation"];
            $mobile = $_POST["mobile"];
            $email = $_POST["email"];  
            $teamsize  = $_POST["teamsize"];  
            $name = $_POST["name"];  
            $designation = $_POST["designation"];  
            $experience = $_POST["experience"];  
            $idea = $_POST["idea"];  
            $problem = $_POST["problem"];  
            $solution = $_POST["solution"];  
            $customer = $_POST["customer"];  
            $ptential = $_POST["ptential"];  
            $competitors = $_POST["competitors"];  
            $diffrence = $_POST["diffrence"];  
            $usp = $_POST["usp"];
			$sector_area = array();
			$sector_area = $_POST["sectors"];
			$location = array();
            $location = $_POST["location"];
            $workspace = $_POST["workspace"];  
            $spst = $_POST["spst"];  
            $funding = $_POST["funding"]; 
			$mentoring = array();
			$mentoring = $_POST["mentoring"];
			$marketing = $_POST["marketing"];
			$patenting = $_POST["patenting"];
			$support = array();
			$support = $_POST["support"]; 
			$anyother = $_POST["anyother"]; 
			
			
			 if (($_FILES['othersfounders']['name']!="")||($_FILES['businessproposal']['name']!=""))
                {
                  // Where the file is going to be stored
                $target_dir = "themes/constructo/files/others_founders/";
                $target_dir2 = "themes/constructo/files/business_proposal/";
                $file = $_FILES['othersfounders']['name'];
                $file2 = $_FILES['businessproposal']['name'];
                $path = pathinfo($file);
                $path2 = pathinfo($file2);
				$randomnmbr = rand();
				$customname = 'NGIS_Application_Team_Details_'.$randomnmbr.'_';
				$randomnmbr2 = rand();
				$customname2 = 'NGIS_Application_Business_Proposal_'.$randomnmbr2.'_';
                $filename = $customname.$path['filename']; 
                $filename2 = $customname2.$path2['filename'];
				
                $ext = $path['extension'];
                $ext2 = $path2['extension'];
                $temp_name = $_FILES['othersfounders']['tmp_name'];
                $temp_name2 = $_FILES['businessproposal']['tmp_name']; 
                $path_filename_ext = $target_dir.$filename.".".$ext; 
                $path_filename_ext2 = $target_dir2.$filename2.".".$ext2;  
                    if (file_exists($path_filename_ext)||file_exists($path_filename_ext2))
                      {
                       if(move_uploaded_file($temp_name,$path_filename_ext) && move_uploaded_file($temp_name2,$path_filename_ext2)){
                        echo '';
                        }  
                      }
                    else
                      {
                        if(move_uploaded_file($temp_name,$path_filename_ext) && move_uploaded_file($temp_name2,$path_filename_ext2)){
                        echo '';
                        }           
                        /*$query = "INSERT INTO xxstp_man_self_dec_files(lgn_id,r_number,filepath,filename) VALUES ('$lgn_id','$r_number','$path_filename_ext','$file')";
                        $connp->query($query) or die("Error : ".mysqli_error($connp)); */              
                      }
                  } 
				  
				  
				  
				  
				  
				  $query = "INSERT INTO stpinext_start_up_details (login_id, startup_name, startup_cin, startup_dpiit, startup_building, startup_street, startup_city, startup_state, 
			startup_country, startup_pin, startup_cp_name, startup_designation,startup_mobile,startup_email) VALUES('$login_id', '$startupname', '$cin', '$dpiit', '$building', 
			'$street', '$city', '$state', '$country', '$pin', '$person', '$persondesignation', '$mobile','$email')";
				//echo $query;
            //$run = mysqli_query($conn, $query);
			if ($run = mysqli_query($conn, $query)) {
				$last_id = mysqli_insert_id($conn);
				//echo "New record created successfully. Last inserted ID is: " . $last_id;
			
			//die; 
		   }
           $query2 = "SELECT startup_id FROM stpinext_start_up_details where startup_id = ".$last_id ." and login_id = $login_id;";
		   
            $rs = mysqli_query($conn, $query2); 
            $rslt = mysqli_fetch_assoc($rs);
            $appid = 'NGIS'.$rslt['startup_id']; 
			//echo $appid; die;
            $promoters = "INSERT INTO stpinext_details_promotors(application_id, login_id, promotors_size_team, promotors_name, promotors_designation, 
			promotors_experience, promotors_file_name, promotors_file_path) VALUES('$appid', '$login_id', '$teamsize','$name','$designation','$experience','$filename',
			'$path_filename_ext')";	
			//echo $promoters;			
            $run2 = mysqli_query($conn, $promoters); 
			
            // loop for sectors/area 
			$area_sector = '';
			foreach($sector_area as $key => $val ) {
				$area_sector .= $val . ', '; 
			}				
            $idea2 = "INSERT INTO stpinext_your_idea(login_id, idea_describe_your_idea, idea_prblm_solving, idea_your_solution, idea_your_customer, 
			idea_market_potential, idea_compositors, idea_different_from_competitors, idea_usp, idea_area, idea_business_proposal_file_name, 
			idea_business_proposal_file_path) VALUES('$login_id', '$idea', '$problem', '$solution', '$customer', '$ptential', 
			'$competitors', '$diffrence', '$usp', '$area_sector', '$filename2', '$path_filename_ext2')";
			//echo $idea; die;
            $run3 = mysqli_query($conn, $idea2);
			
            // loop for location 
			$loc = '';
			foreach($location as $key => $val ) {
				$loc .= $val . ', '; 
			}	
            // loop for mentoring 
			$mentor = '';
			foreach($mentoring as $key => $val ) {
				$mentor .= $val . ', '; 
			}	
            // loop for Support Services 
			$supportserv = '';
			foreach($support as $key => $val ) {
				$supportserv .= $val . ', '; 
			}	
			//echo $loc; die;
            $requirestpinext = "INSERT INTO stpinext_require_from_stpinext(login_id, require_location, require_workspace, require_spst, require_funding, require_mentoring, require_marketing, require_patenting, require_supportservice, require_anyother) VALUES('$login_id', '$loc', '$workspace', '$spst', '$funding', '$mentor', '$marketing', '$patenting', '$supportserv', '$anyother')";
           //echo $requirestpinext;
            $run4 = mysqli_query($conn, $requirestpinext);
			
			if ($run && $run2 && $run3 && $run4) {
				$email = 'startup.pmu@stpi.in';
				$userId   = 'startup.pmu@stpi.in';
				$userPass = 'Passw0rd$123';
				$SetFrom  = 'startup.pmu@stpi.in';
				$SetName  = 'startup.pmu@stpi.in';
				$subjects = 'NGIS Application';
				$useremail = $_POST["email"];
				//select all those field which you have just inserted of all four forms. Concatenate all with in new line 
					$message = '<html><body>';
			$message .= '<img src="http://stpinext.in/wp-content/assets/img/NGIS_logo-02.png" alt="NGIS" width="200"/>';
			$message .= '<p>Dear <b>'.$rsltuserquery['username'].'</b>,</p>';
			$message .= '<p>Thank you for submitting your application.</p>';
			$message .= '<p>Your application Id is <b>'.$appid.'</b>.</p>';
			$message .= '<p>Please quote this application id in future correspondence.</p>';
			$message .='<h3>INFORMATION ABOUT APPLICANT</h3>';
			$message .= '<table rules="all" style="border-color: #666;" cellpadding="10">';
			$message .= "<tr style='background: #eee;'><td><strong>Name of start-up:</strong> </td><td>" . strip_tags($_POST['startupname']) . "</td></tr>";
			$message .= "<tr><td><strong>CIN No.:</strong> </td><td>" . strip_tags($_POST['cin']) . "</td></tr>";
			$message .= "<tr><td><strong>DPIIT Registered?:</strong> </td><td>" . strip_tags($_POST['dpiit']) . "</td></tr>";
			$message .='<tr><td colspan="2"><strong style="font-size: 16px;">Address</strong></td></tr>';
			$message .= "<tr><td><strong>Building/Floor:</strong> </td><td>" . strip_tags($_POST['building']) . "</td></tr>";
			$message .= "<tr><td><strong>Street/Road:</strong> </td><td>" . $_POST['street'] . "</td></tr>"; 
			$message .= "<tr><td><strong>City:</strong> </td><td>" . $_POST['city'] . "</td></tr>"; 
			$message .= "<tr><td><strong>country:</strong> </td><td>" . $_POST['country'] . "</td></tr>"; 
			$message .= "<tr><td><strong>PIN:</strong> </td><td>" . $_POST['pin'] . "</td></tr>"; 
			$message .= '<tr><td colspan="2"><strong style="font-size: 16px;">Contact person information</strong></td></tr>'; 
			$message .= "<tr><td><strong>Name:</strong> </td><td>" . $_POST['person'] . "</td></tr>"; 
			$message .= "<tr><td><strong>Designation:</strong> </td><td>" . $_POST['persondesignation'] . "</td></tr>"; 
			$message .= "<tr><td><strong>Mobile:</strong> </td><td>" . $_POST['mobile'] . "</td></tr>";  
			$message .= "<tr><td><strong>Email:</strong> </td><td>" . $_POST['email'] . "</td></tr>";  
			$message .= '<tr><td colspan="2"><h3>INFORMATION ABOUT THE PROMOTERS, FOUNDERS,TEAM ETC.</h3></td></tr>';
			$message .= "<tr><td><strong>No. of founders/promoters:</strong> </td><td>" . $_POST['teamsize'] . "</td></tr>";
			$message .= "<tr><td><strong>Name of the first founder/promoter:</strong> </td><td>" . $_POST['name'] . "</td></tr>";    
			$message .= "<tr><td><strong>Current designation held in the entity:</strong> </td><td>" . $_POST['designation'] . "</td></tr>";  
			$message .= "<tr><td><strong>Experience in brief:</strong> </td><td>" . $_POST['experience'] . "</td></tr>";   
			$message .= '<tr><td colspan="2"><h3>INFORMATION ABOUT YOUR IDEA, PRODUCT, SERVICE OFFERING</h3></td></tr>';
			$message .= "<tr><td><strong>Briefly describe your idea:</strong> </td><td>" . $_POST['idea'] . "</td></tr>";  
			$message .= "<tr><td><strong>What problem are you solving?:</strong> </td><td>" . $_POST['problem'] . "</td></tr>";  
			$message .= "<tr><td><strong>What is your solution?:</strong> </td><td>" . $_POST['solution'] . "</td></tr>"; 
			$message .= "<tr><td><strong>Who will be your customer?:</strong> </td><td>" . $_POST['customer'] . "</td></tr>";  
			$message .= "<tr><td><strong>What is your market potential?:</strong> </td><td>" . $_POST['ptential'] . "</td></tr>"; 
			$message .= "<tr><td><strong>Do you have any competitors?:</strong> </td><td>" . $_POST['competitors'] . "</td></tr>"; 
			$message .= "<tr><td><strong>How are you different from your competitor?:</strong> </td><td>" . $_POST['diffrence'] . "</td></tr>"; 
			$message .= "<tr><td><strong>What is your USP ( Unique Selling Proposition)?:</strong> </td><td>" . $_POST['usp'] . "</td></tr>";  
			$message .= "<tr><td><strong>Focus Area/Sectors?:</strong> </td><td>" . $area_sector . "</td></tr>";
			$message .= '<tr><td colspan="2"><h3>WHAT DO YOU NEED FROM NGIS(NEXT GENERATION INCUBATION SCHEME)</h3></td></tr>';
			$message .= "<tr><td><strong>Location of physical presence:</strong> </td><td>" . $loc . "</td></tr>";
			$message .= '<tr><td colspan="2"><strong style="font-size: 16px;">Services</td></tr>';
			$wrk = $_POST['workspace'];
			if($wrk != ''){
				$message .= "<tr><td><strong>Workspace:</strong> </td><td>" . $_POST['workspace'] . "</td></tr>";
			}
			$fndng = $_POST['funding'];
			$message .= "<tr><td><strong>Soft Product Security and Testing (SPST):</strong> </td><td>" . $_POST['spst'] . "</td></tr>";
			$message .= "<tr><td><strong>Seed Funding:</strong> </td><td>" . $_POST['funding'] . "</td></tr>";
			$message .= "<tr><td><strong>Mentoring:</strong> </td><td>" . $mentor . "</td></tr>";
			$message .= "<tr><td><strong>Marketing:</strong> </td><td>" . $_POST['marketing'] . "</td></tr>";
			$message .= "<tr><td><strong>Patenting/IPR Consulting:</strong> </td><td>" . $_POST['patenting']. "</td></tr>"; 
			$message .= "<tr><td><strong>Support Services:</strong> </td><td>" . $supportserv . "</td></tr>";      
			$anothr = $_POST['anyother'];
			if($anothr != ''){
				$message .= "<tr><td><strong>Any Other:</strong> </td><td>" . $_POST['anyother'] . "</td></tr>";
			} 
			$message .= "</table>";
			$message .= "</body></html>"; 
				$mail = new PHPMailer();
				
				$fullname = $useremail;
				$mail->IsSMTP();
				$mail->SMTPAuth = true;
				// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
				//$mail->SMTPDebug = 2; //Alternative to above constant
				$mail->SMTPSecure = "ssl";
				$mail->Host = "mail.stpi.in";
				$mail->Port =  465;
				$mail->Username  = $userId;
				$mail->Password  = $userPass;
				$mail->SetFrom($SetFrom, $SetName);
				$mail->addBCC($useremail);
				$mail->Subject = $subjects;
				$mail->MsgHTML($message);
				$root = $_SERVER['DOCUMENT_ROOT'];
				$file_to_attach = $root.'/wp-content/themes/constructo/files/others_founders/'.$filename.'.'.$ext ;
				$mail->AddAttachment($file_to_attach);
				$file_to_attach2 = $root.'/wp-content/themes/constructo/files/business_proposal/'.$filename2.'.'.$ext ;
				$mail->AddAttachment($file_to_attach2);
				/* $root = $_SERVER['DOCUMENT_ROOT'];
				$file_to_attach = $root.'/wp-content/themes/constructo/files/business_proposal/'.$filename.'.'.$ext ;
				$mail->AddAttachment($file_to_attach); */
				//slect attachment from folder to attached and send to mail
				//$email->AddAttachment( $file_to_attach , 'NameOfFile.pdf' );
				//send to mail id and added name
				//send to mail id and added name
				$mail->AddAddress($email, $fullname);
				//print_r($mail); die;
				//echo $application_id;die;
				$mail->Send(); 
				if ($mail) {
				//	echo "<script>alert('Data save successful, please go through your  Email-Id')</script>";
					echo "<script>window.location = 'thankyou.php?data=$appid';</script>"; 

				}
			}
		}	
	else
		{
			echo '<script>alert("Please fill all required fields")</script>';
		}	
}
?> 
<div class="container-fluid">
	<div class="row" style="background-color: #0c1527;">
		<div class="col-md-12">
			<div class="col-md-6" align="left">
				<img src="assets/img/NGIS_logo-02.png" id="ngis" onclick='window.open("http://ngis.stpi.in/");return false;' width="220"/>
			</div>
			<div class="col-md-6" align="right">
				<img src="assets/img/whte.png" id="stpi" onclick='window.open("https://www.stpi.in/");return false;' width="124"/>
			</div>
		</div>
	</div>
	<div class="row">
	<div class="col-md-12" style="padding-top:10px;">
		<div class="col-md-6" align="left">		
		<h4 style="color:#ffffff;"><?php 
		echo "Welcome ". $rsltuserquery['username']." !";
		
		?></h4>
		</div>
		<div class="col-md-6" align="right">		
		<h4><a style="color:#ffffff;" href="logout.php"><u>Logout</u></a></h4>
		</div>
		
	</div>
	</div>
	<div class="col-md-12 push">
		<div class="col-md-1">&nbsp;</div>
		<div class="col-md-10">
			<form id="msform" action="" method="POST" enctype="multipart/form-data">
				<!-- progressbar -->
				<ul id="progressbar">
					<li class="active">Applicant Details</li>
					<li>Founder/Promoter Details</li>
					<li>Application Details</li>
					<li>Summary, Review & Submit</li>
				</ul>
				<!-- fieldsets -->
				<fieldset>
					<h2 class="fs-title">Information about applicant</h2>
					<h3 class="fs-subtitle">Tell us something about the applicant.</h3>
					<section align="left"><h4>Registered Entity Name</h4>
					<div class="">
						<input type="text" name="startupname" id="startupname" placeholder="Name of start-up" maxlength="100" onblur="return Validate()" required/>
						<label class="message" id="message" style="color:#ff0000;font-weight:bold;">
					</div>
					<div class="">
						<input type="text" name="cin" id="cin" placeholder="CIN No." maxlength="100" onblur="return Validate()" required/>
						<label class="message" id="message2" style="color:#ff0000;font-weight:bold;">
					</div>
					<div class="">
					<p>DPIIT Registered?</p>
								<select name="dpiit" id="dpiit" onblur="return Validate()" required> 
									<option value="">Select</option>
									<option value="Yes" >Yes</option>
									<option value="No" >No</option>
								</select>
								<label class="message" id="message3" style="color:#ff0000;font-weight:bold;">
					</div>			
					</section>
					<hr>
					<section align="left"><h4>Address</h4>
					<input type="text" name="building" id="building" placeholder="Building/Floor" maxlength="100" />
					<input type="text" name="street" id="street" placeholder="Street/Road" maxlength="100" />
					<div>
						<input type="text" name="city" id="city" placeholder="City" maxlength="100" onblur="return Validate2()" required/>
						<label class="message" id="message4" style="color:#ff0000;font-weight:bold;">
					</div>
					<input type="text" name="state" id="state" placeholder="State" maxlength="100" />
					<div>
						<input type="text" name="country" id="country" placeholder="Country" maxlength="100"  onblur="return Validate2()" required/>
						<label class="message" id="message5" style="color:#ff0000;font-weight:bold;">
					</div>
					<div>			
						<input type="text" name="pin" id="pin" placeholder="PIN" maxlength="6"  onblur="return Validate2()" required/>
						<label class="message" id="message6" style="color:#ff0000;font-weight:bold;">
					</div>
					</section>
					<hr>
					<section align="left"><h4>Contact person information</h4>
					<div>
						<input type="text" name="person" id="person" placeholder="Contact Person Name" maxlength="100" onblur="return Validate3()" required/>
						<label class="message" id="message7" style="color:#ff0000;font-weight:bold;">
					</div>
					<div>
						<input type="text" name="persondesignation" id="persondesignation" placeholder="Designation" maxlength="100" onblur="return Validate3()" required/>
						<label class="message" id="message8" style="color:#ff0000;font-weight:bold;">
					</div>
					<div>
						<input type="text" name="mobile" id="mobile" placeholder="Mobile" maxlength="10" onblur="return Validate3()" required/>
						<label class="message" id="message9" style="color:#ff0000;font-weight:bold;">
					</div>
					<div>
						<input type="email" name="email" id="email" placeholder="Email" maxlength="100" onblur="return Validate3()" required/>
						<label class="message" id="message10" style="color:#ff0000;font-weight:bold;">
					</div>
					</section>
					<hr>
					<input type="button" name="next" id="send" class="next action-button" value="Next" style="background-color:C5C5F1;" onclick="return check();" required/>
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Information about the Promoters, Founders,Team etc.</h2>
					<h3 class="fs-subtitle">Details about your team and experience etc.</h3>
					<section align="left">
					<div>
						<input type="text" name="teamsize" id="teamsize" placeholder="No. of founders/promoters" maxlength="2" onblur="return Validate4()"/>
						<label class="message" id="message11" style="color:#ff0000;font-weight:bold;">
					</div>	
					<div>
						<input type="text" name="name" id="name" placeholder="Name of the first founder/promoter" maxlength="100" onblur="return Validate4()"/>
						<label class="message" id="message12" style="color:#ff0000;font-weight:bold;">
					</div>
					<div>
						<input type="text" name="designation" id="designation" placeholder="Current designation held in the entity" maxlength="100" onblur="return Validate4()"/>
						<label class="message" id="message13" style="color:#ff0000;font-weight:bold;">
					</div>	
					<div>
						<input type="text" name="experience" id="experience" placeholder="Experience in brief" maxlength="100" onblur="return Validate4()"/>
						<label class="message" id="message14" style="color:#ff0000;font-weight:bold;">
					</div>	
					<div>&nbsp;</div>
					<span><b>Team information (Include information of all founders, promoters & team)</b></span>
					<input type="file" name="othersfounders" placeholder="Other founders details"/>
					</section>
					<hr>
					<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
					<input type="button" name="next" class="next action-button" value="Next"/>
				</fieldset>
				<fieldset>
					<h2 class="fs-title">Information about your Idea, product, service offering</h2>
					<h3 class="fs-subtitle">Briefly describe your idea, problem solving, solution etc.</h3>
					<section align="left">
					<div>
						<textarea type="text" name="idea" id="idea" placeholder="Briefly describe your idea" maxlength="100" onblur="return Validate5()"></textarea> 
						<label class="message" id="message15" style="color:#ff0000;font-weight:bold;">
					</div>
					<div>
						<textarea type="text" name="problem" id="problem" placeholder="What problem are you solving?" maxlength="100" onblur="return Validate5()"></textarea>
						<label class="message" id="message16" style="color:#ff0000;font-weight:bold;">
					</div>
					<div> 
						<textarea type="text" name="solution" id="solution" placeholder="What is your solution?" maxlength="100" onblur="return Validate5()"></textarea> 
						<label class="message" id="message17" style="color:#ff0000;font-weight:bold;">
					</div>
					<div>
						<textarea type="text" name="customer" id="customer" placeholder="Who will be your customer?" maxlength="100" onblur="return Validate5()"></textarea> 
						<label class="message" id="message18" style="color:#ff0000;font-weight:bold;">
					</div>
					<div>
						<textarea type="text" name="ptential" id="potential" placeholder="What is your market potential?" maxlength="100" onblur="return Validate5()"></textarea> 
						<label class="message" id="message19" style="color:#ff0000;font-weight:bold;">
					</div>
					<div>
						<textarea type="text" name="competitors" id="competitors" placeholder="Do you have any competitors?" maxlength="100" onblur="return Validate5()"></textarea> 
						<label class="message" id="message20" style="color:#ff0000;font-weight:bold;">
					</div>
					<div>
						<textarea type="text" name="diffrence" id="diffrence" placeholder="How are you different from your competitor?" maxlength="100" onblur="return Validate5()"></textarea> 
						<label class="message" id="message21" style="color:#ff0000;font-weight:bold;">
					</div>
					<div>
						<textarea type="text" name="usp" id="usp" placeholder="What is your USP ( Unique Selling Proposition)?" maxlength="100" onblur="return Validate5()"></textarea> 
						<label class="message" id="message22" style="color:#ff0000;font-weight:bold;">
					</div>
					<div class="col-md-12">
						<p>Focus Area/Sectors?</p>
						<div class="container col-md-12">
							<div class="col-md-3" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="Big Data" name="sectors[]">Big Data<span class="checkmark"></span>
								</label>
							</div> 
							<div class="col-md-4" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="Internet Of Things" name="sectors[]">Internet Of Things<span class="checkmark"></span>
								</label>
							</div>
							<div class="col-md-5" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="Artificial Intelligence (AI)" name="sectors[]">Artificial Intelligence<span class="checkmark"></span>
								</label>
							</div>
						</div>  
						<div class="container col-md-12"> 
							<div class="col-md-3" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="Robotics" name="sectors[]">Robotics<span class="checkmark"></span>
								</label>
							</div>
							<div class="col-md-4" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="Smart Sensors" name="sectors[]">Smart Sensors<span class="checkmark"></span>
								</label>
							</div>
							<div class="col-md-5" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="Virtual/Augmented reality" name="sectors[]">Virtual/Augmented reality<span class="checkmark"></span>
								</label>
							</div>
						</div> 
						<div class="container col-md-12"> 
							<div class="col-md-3" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="Photonics" name="sectors[]">Photonics<span class="checkmark"></span>
								</label>
							</div>
							<div class="col-md-4" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="Block Chain" name="sectors[]">Block Chain<span class="checkmark"></span>
								</label>
							</div>
							<div class="col-md-5" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="Additive Manufacturing" name="sectors[]">Additive Manufacturing<span class="checkmark"></span>
								</label>
							</div>
						</div> 
						<div class="container col-md-12"> 
							<div class="col-md-3" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="GIS" name="sectors[]">GIS<span class="checkmark"></span>
								</label>
							</div>
							<div class="col-md-4" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="Fintech" name="sectors[]">Fintech<span class="checkmark"></span>
								</label>
							</div>
							<div class="col-md-5" align="left">
								<label class="checkbox-inline" style="padding-left:33px;">
								  <input type="checkbox" value="Machine Learning" name="sectors[]">Machine Learning<span class="checkmark"></span>
								</label>
							</div>
						</div> 
						<div class="col-md-12" style="padding-left:35px;"> 
							<div class="col-md-3" align="center">
								<label class="checkbox-inline container" style="padding-left:0px;">
									<input type="checkbox" id="othersifany" />
										Others
								  <span class="checkmark"></span> 
								</label> 
							</div>
							<div class="col-md-9" align="left">
								<div id="dvothersifany" style="display: none"> 
									<input type="text" name="sectors[]" placeholder="Please explain here if any"/>
								</div> 
							</div> 
						</div> 
					</div>
					<div>&nbsp;</div>
					<span><b>Detailed document explaining the idea, the needs, the targets/milestone</b></span>
					<input type="file" name="businessproposal" placeholder="Detailed Business Proposal explaining your idea as well as your need"/>
					</section>
					<hr>
					<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
					<input type="button" name="next" class="next action-button" value="Next"/>
				</fieldset>
				<fieldset>
					<h2 class="fs-title">What do you need from NGIS(Next Generation Incubation Scheme)</h2>
					<h3 class="fs-subtitle">Your requirement from us.</h3>
					<section align="left">
					<!--<input type="text" name="stations" placeholder="Number of work stations required"/>
					<input type="text" name="funding" placeholder="Seed Funding , if any"/>
					--> 
								<h4>Location of physical presence</h4>
								<label class="container">Agartala
								  <input type="checkbox" value="Agartala" name="location[]">
								  <span class="checkmark"></span>
								</label>
								<label class="container">Bhilai
								  <input type="checkbox" value="Bhilai" name="location[]">
								  <span class="checkmark"></span>
								</label>
								<label class="container">Bhopal
								  <input type="checkbox" value="Bhopal" name="location[]">
								  <span class="checkmark"></span>
								</label>
								<label class="container">Bhubaneswar
								  <input type="checkbox" value="Bhubaneswar" name="location[]">
								  <span class="checkmark"></span>
								</label>
								<label class="container">Dehradun
								  <input type="checkbox" value="Dehradun" name="location[]">
								  <span class="checkmark"></span>
								</label>
								<label class="container">Guwahati
								  <input type="checkbox" value="Guwahati" name="location[]">
								  <span class="checkmark"></span>
								</label>

								<label class="container">Jaipur
								  <input type="checkbox" value="Jaipur" name="location[]">
								  <span class="checkmark"></span>
								</label> 
								<label class="container">Lucknow(with an extension centre at Prayagraj)
								  <input type="checkbox" value="Lucknow" name="location[]">
								  <span class="checkmark"></span>
								</label>
								<label class="container">Mohali/Panchkula
								  <input type="checkbox" value="Mohali/Panchkula" name="location[]">
								  <span class="checkmark"></span>
								</label> 

								<label class="container">Patna
								  <input type="checkbox" value="Patna" name="location[]">
								  <span class="checkmark"></span>
								</label>


								<label class="container">Vijayawada
								  <input type="checkbox" value="Vijayawada" name="location[]">
								  <span class="checkmark"></span>
								</label> 
								<p>&nbsp;</p>
								<h4>Services</h4>
								
								
								<label for="workspace" class="container">
										Workspace
									<input type="checkbox" id="workspace" />
								  <span class="checkmark"></span> 
								</label> 
								<div id="dvworkspace" style="display: none"> 
									<input type="text" name="workspace" id="workspaces" placeholder="No. of P-n-P seats required"/>
								</div> 
								<label for="spst" class="container">
										Soft Product Security and Testing (SPST)
									<input type="checkbox" id="spst" name="spst" value="Yes"/>
								  <span class="checkmark"></span> 
								</label>  
								
								<label for="funding" class="container">
										Seed Funding
									<input type="checkbox" id="funding" value="Yes" name="funding"/>
								  <span class="checkmark"></span> 
								</label>  
								
								
								<label for="mentoring" class="container">
										Mentoring
									<input type="checkbox" id="mentoring" />
								  <span class="checkmark"></span> 
								</label> 
									<div id="dvmentoring" style="display: none; padding:20px;"> 
										<label for="startupbootcamps" class="container">
											Startup boot camps
											<input type="checkbox" id="startupbootcamps" name="mentoring[]" value="Startup boot camps"/>
											<span class="checkmark"></span> 
										</label> 
										<label for="businessmentoring" class="container">
											Business Mentoring
											<input type="checkbox" id="businessmentoring" name="mentoring[]" value="Business Mentoring"/>
											<span class="checkmark"></span> 
										</label> 
										<label for="technicalmentoring" class="container">
											Technical Mentoring
											<input type="checkbox" id="technicalmentoring" name="mentoring[]" value="Technical Mentoring"/>
											<span class="checkmark"></span> 
										</label> 
									</div> 
								
								<label for="marketing" class="container">
										Marketing
									<input type="checkbox" id="marketing" name="marketing" value="Yes"/>
								  <span class="checkmark"></span> 
								</label>  
								
								<label for="patenting" class="container">
										Patenting/IPR Consulting
									<input type="checkbox" id="patenting" name="patenting" value="Yes"/>
								  <span class="checkmark"></span> 
								</label>  
								
								<label for="supportservices" class="container">
										Support Services
									<input type="checkbox" id="supportservices" />
								  <span class="checkmark"></span> 
								</label> 
								<div id="dvregistration" style="display: none; padding:20px;"> 
									<label for="registration" class="container">
											Registration/Incorporation Consulting
										<input type="checkbox" id="registration" value="Registration/Incorporation Consulting" name="support[]"/>
									  <span class="checkmark"></span> 
									</label> 
									<label for="legal" class="container">
											Legal Consulting
										<input type="checkbox" id="legal" value="Legal Consulting" name="support[]"/>
									  <span class="checkmark"></span> 
									</label> 
									<label for="hrconsulting" class="container">
											HR Consulting
										<input type="checkbox" id="hrconsulting" value="HR Consulting" name="support[]"/>
									  <span class="checkmark"></span> 
									</label> 
									<label for="finance" class="container">
											Finance/Tax Consulting
										<input type="checkbox" id="finance" value="Finance/Tax Consulting" name="support[]"/>
									  <span class="checkmark"></span> 
									</label> 
								</div>    
								<label for="anyother" class="container">
										Any other
									<input type="checkbox" id="anyother" />
								  <span class="checkmark"></span> 
								</label> 
								<div id="dvanyother" style="display: none"> 
									<input type="text" id="txtanyother" name="anyother" placeholder="Any Other"/>
								</div>   
					<p>&nbsp;</p>
					<!--<p>How regularly you will use NGIS services and facilities physically.</p>
								<select name="facilities"> 
									<option value="">Select</option>
									<option value="daily" >Daily</option>
									<option value="weekly" >Weekly</option>
									<option value="monthly" >Monthly</option>
									<option value="periodically as required" >Periodically as required</option> 
								</select>--> 
					</section>
					<hr>
					<input type="button" name="previous" class="previous action-button-previous" value="Previous"/>
					<input type="submit" name="submit" class="action-button" value="Submit"/>
				</fieldset>
			</form> 
		</div>
		<div class="col-md-1">&nbsp;</div>
	</div>
</div>
<footer>
<div class="col-md-12 footer" align="center">
<p>© 2019 STPINEXT. All rights reserved.</p>
</div>
</footer>
<!-- /.MultiStep Form -->
<script>
$(window).scroll(function(e){ 
  var $el = $('.fixedElement'); 
  var isPositionFixed = ($el.css('position') == 'fixed');
  if ($(this).scrollTop() > 200 && !isPositionFixed){ 
    $el.css({'position': 'fixed', 'top': '0px'}); 
  }
  if ($(this).scrollTop() < 200 && isPositionFixed){
    $el.css({'position': 'static', 'top': '0px'}); 
  } 
});
</script>
<script>
$(window).scroll(function(e){ 
  var $el = $('.fixedElement'); 
  var isPositionFixed = ($el.css('position') == 'fixed');
  if ($(this).scrollTop() > 200 && !isPositionFixed){ 
    $el.css({'position': 'fixed', 'top': '0px'}); 
  }
  if ($(this).scrollTop() < 200 && isPositionFixed){
    $el.css({'position': 'static', 'top': '0px'}); 
  } 
});
</script>
<script> 
  function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
      textbox.addEventListener(event, function() {
        if (inputFilter(this.value)) {
          this.oldValue = this.value;
          this.oldSelectionStart = this.selectionStart;
          this.oldSelectionEnd = this.selectionEnd;
        } else if (this.hasOwnProperty("oldValue")) {
          this.value = this.oldValue;
          this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
        }
      });
    });
  }

  setInputFilter(document.getElementById("mobile"), function(value) {
    return /^\d*$/.test(value);
  });
  setInputFilter(document.getElementById("pin"), function(value) {
    return /^\d*$/.test(value);
  });
  setInputFilter(document.getElementById("teamsize"), function(value) {
    return /^\d*$/.test(value);
  });
  setInputFilter(document.getElementById("workspaces"), function(value) {
    return /^\d*$/.test(value);
  });
</script>
<script>
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

</script>
<script>
$(function () {
        $("#workspace").click(function () {
            if ($(this).is(":checked")) {
                $("#dvworkspace").show(); 
            } else {
                $("#dvworkspace").hide(); 
            }
        });
        $("#othersifany").click(function () {
            if ($(this).is(":checked")) {
                $("#dvothersifany").show(); 
            } else {
                $("#dvothersifany").hide(); 
            }
        }); 
        $("#mentoring").click(function () {
            if ($(this).is(":checked")) {
                $("#dvmentoring").show(); 
            } else {
                $("#dvmentoring").hide(); 
            }
        });
       /*  $("#marketing").click(function () {
            if ($(this).is(":checked")) {
                $("#dvmarketing").show(); 
            } else {
                $("#dvmarketing").hide(); 
            }
        }); */
        /* $("#patenting").click(function () {
            if ($(this).is(":checked")) {
                $("#dvpatenting").show(); 
            } else {
                $("#dvpatenting").hide(); 
            }
        }); */
        $("#supportservices").click(function () {
            if ($(this).is(":checked")) {
                $("#dvregistration").show(); 
            } else {
                $("#dvregistration").hide(); 
            }
        });
        /* $("#legal").click(function () {
            if ($(this).is(":checked")) {
                $("#dvlegal").show(); 
            } else {
                $("#dvlegal").hide(); 
            }
        });
        $("#admin").click(function () {
            if ($(this).is(":checked")) {
                $("#dvadmin").show(); 
            } else {
                $("#dvadmin").hide(); 
            }
        }); */
        $("#anyother").click(function () {
            if ($(this).is(":checked")) {
                $("#dvanyother").show(); 
            } else {
                $("#dvanyother").hide(); 
            }
        });
    });
</script>
<script>
    function Validate(){ 
        var a=document.getElementById("startupname").value; 
        var b=document.getElementById("cin").value; 
        var c=document.getElementById("dpiit").value; 
        var isValid = true; 
        if(a==null || a==""){
            document.getElementById('message').style.visibility="visible";
            document.getElementById('message').innerHTML="Please enter your Startup name";
            isValid =  false; 
        }
        else{
            document.getElementById('message').style.visibility="hidden"; 
            } 
        if(b==null || b==""){
            document.getElementById('message2').style.visibility="visible";
            document.getElementById('message2').innerHTML="Please enter CIN No.";
            isValid =  false; 
        }
        else{
            document.getElementById('message2').style.visibility="hidden"; 
            } 
        if(c==null || c==""){
            document.getElementById('message3').style.visibility="visible";
            document.getElementById('message3').innerHTML="Please select Yes/No for DPIIT";
            isValid =  false; 
        }
        else{
            document.getElementById('message3').style.visibility="hidden"; 
            } 
        return isValid;
    }
    function Validate2(){ 
        var d=document.getElementById("city").value; 
        var e=document.getElementById("country").value; 
        var f=document.getElementById("pin").value; 
        var isValid = true; 
        if(d==null || d==""){
            document.getElementById('message4').style.visibility="visible";
            document.getElementById('message4').innerHTML="Please enter city name";
            isValid =  false; 
        }
        else{
            document.getElementById('message4').style.visibility="hidden"; 
            } 
        if(e==null || e==""){
            document.getElementById('message5').style.visibility="visible";
            document.getElementById('message5').innerHTML="Please enter country name";
            isValid =  false; 
        }
        else{
            document.getElementById('message5').style.visibility="hidden"; 
            } 
        if(f==null || f==""){
            document.getElementById('message6').style.visibility="visible";
            document.getElementById('message6').innerHTML="Please enter pin";
            isValid =  false; 
        }
        else{
            document.getElementById('message6').style.visibility="hidden"; 
            } 
        return isValid;
    }
    function Validate3(){ 
        var g=document.getElementById("person").value; 
        var h=document.getElementById("persondesignation").value; 
        var i=document.getElementById("mobile").value; 
        var j=document.getElementById("email").value; 
        var isValid = true; 
        if(g==null || g==""){
            document.getElementById('message7').style.visibility="visible";
            document.getElementById('message7').innerHTML="Please enter contact person name";
            isValid =  false; 
        }
        else{
            document.getElementById('message7').style.visibility="hidden"; 
            } 
        if(h==null || h==""){
            document.getElementById('message8').style.visibility="visible";
            document.getElementById('message8').innerHTML="Please enter contact person designation";
            isValid =  false; 
        }
        else{
            document.getElementById('message8').style.visibility="hidden"; 
            } 
        if(i==null || i==""){
            document.getElementById('message9').style.visibility="visible";
            document.getElementById('message9').innerHTML="Please enter contact person mobile no.";
            isValid =  false; 
        }
        else{
            document.getElementById('message9').style.visibility="hidden"; 
            } 
        if(j==null || j==""){
            document.getElementById('message10').style.visibility="visible";
            document.getElementById('message10').innerHTML="Please enter contact person email";
            isValid =  false; 
        }
        else{
            document.getElementById('message10').style.visibility="hidden"; 
            } 
        return isValid;
    }
    function Validate4(){ 
        var k=document.getElementById("teamsize").value; 
        var l=document.getElementById("name").value; 
        var m=document.getElementById("designation").value; 
        var n=document.getElementById("experience").value; 
        var isValid = true; 
        if(k==null || k==""){
            document.getElementById('message11').style.visibility="visible";
            document.getElementById('message11').innerHTML="Please enter no. of founders/promotors";
            isValid =  false; 
        }
        else{
            document.getElementById('message11').style.visibility="hidden"; 
            } 
        if(l==null || l==""){
            document.getElementById('message12').style.visibility="visible";
            document.getElementById('message12').innerHTML="Please enter name";
            isValid =  false; 
        }
        else{
            document.getElementById('message12').style.visibility="hidden"; 
            } 
        if(m==null || m==""){
            document.getElementById('message13').style.visibility="visible";
            document.getElementById('message13').innerHTML="Please enter designation";
            isValid =  false; 
        }
        else{
            document.getElementById('message13').style.visibility="hidden"; 
            } 
        if(n==null || n==""){
            document.getElementById('message14').style.visibility="visible";
            document.getElementById('message14').innerHTML="Please enter experience";
            isValid =  false; 
        }
        else{
            document.getElementById('message14').style.visibility="hidden"; 
            } 
        return isValid;
    }
    function Validate5(){ 
        var o=document.getElementById("idea").value; 
        var p=document.getElementById("problem").value; 
        var q=document.getElementById("solution").value; 
        var r=document.getElementById("customer").value; 
        var s=document.getElementById("potential").value; 
        var t=document.getElementById("competitors").value; 
        var u=document.getElementById("diffrence").value; 
        var v=document.getElementById("usp").value; 
       // var w=document.getElementById("experience").value; 
        var isValid = true; 
        if(o==null || o==""){
            document.getElementById('message15').style.visibility="visible";
            document.getElementById('message15').innerHTML="This field can not be blank";
            isValid =  false; 
        }
        else{
            document.getElementById('message15').style.visibility="hidden"; 
            } 
        if(p==null || p==""){
            document.getElementById('message16').style.visibility="visible";
            document.getElementById('message16').innerHTML="This field can not be blank";
            isValid =  false; 
        }
        else{
            document.getElementById('message16').style.visibility="hidden"; 
            } 
        if(q==null || q==""){
            document.getElementById('message17').style.visibility="visible";
            document.getElementById('message17').innerHTML="This field can not be blank";
            isValid =  false; 
        }
        else{
            document.getElementById('message17').style.visibility="hidden"; 
            } 
        if(r==null || r==""){
            document.getElementById('message18').style.visibility="visible";
            document.getElementById('message18').innerHTML="This field can not be blank";
            isValid =  false; 
        }
        else{
            document.getElementById('message18').style.visibility="hidden"; 
            } 
        if(s==null || s==""){
            document.getElementById('message19').style.visibility="visible";
            document.getElementById('message19').innerHTML="This field can not be blank";
            isValid =  false; 
        }
        else{
            document.getElementById('message19').style.visibility="hidden"; 
            } 
        if(t==null || t==""){
            document.getElementById('message20').style.visibility="visible";
            document.getElementById('message20').innerHTML="This field can not be blank";
            isValid =  false; 
        }
        else{
            document.getElementById('message20').style.visibility="hidden"; 
            } 
        if(u==null || u==""){
            document.getElementById('message21').style.visibility="visible";
            document.getElementById('message21').innerHTML="This field can not be blank";
            isValid =  false; 
        }
        else{
            document.getElementById('message21').style.visibility="hidden"; 
            } 
        if(v==null || v==""){
            document.getElementById('message22').style.visibility="visible";
            document.getElementById('message22').innerHTML="This field can not be blank";
            isValid =  false; 
        }
        else{
            document.getElementById('message22').style.visibility="hidden"; 
            } 
        // if(w==null || w==""){
        //     document.getElementById('message23').style.visibility="visible";
        //     document.getElementById('message23').innerHTML="Please enter experience";
        //     isValid =  false; 
        // }
        // else{
        //     document.getElementById('message23').style.visibility="hidden"; 
        //     } 
        return isValid;
    }
</script>
<script>
	// document.getElementById("startupname").addEventListener("keyup", function() {
	// 	var nameInput = document.getElementById('startupname').value;
	// 	if (nameInput != "") {
	// 		document.getElementById('send').removeAttribute("disabled");
	// 		document.getElementById('send').style.backgroundColor='#ee0979';
	// 	} 
	// 	else if(nameInput == "") { 
	// 		document.getElementById('send').setAttribute("disabled", null);
	// 		document.getElementById('send').style.backgroundColor='#C5C5F1';
	// 	}
	// }); 
	function check(){
		var nameInput = document.getElementById('startupname').value;
		var cinInput = document.getElementById('cin').value;
		var dpiitInput = document.getElementById('dpiit').value;
		var cityInput = document.getElementById('city').value;
		var countryInput = document.getElementById('country').value;
		var personInput = document.getElementById('person').value;
		var persondesignationInput = document.getElementById('persondesignation').value;
		var mobileInput = document.getElementById('mobile').value;
		var emailInput = document.getElementById('email').value;
		var isValid =  false; 
		if(nameInput != "" && cinInput != "" && dpiitInput != "" && cityInput != "" && countryInput != "" && personInput != "" && persondesignationInput != "" && mobileInput != "" && emailInput != ""){
		alert('hi');
			document.getElementById('send').removeAttribute("disabled");
			document.getElementById('send').style.backgroundColor='#ee0979';
		isValid =  true; 
		}
		else{
			alert('all fields important');
			document.getElementById('send').setAttribute("disabled", null);
			document.getElementById('send').style.backgroundColor='#C5C5F1';
			isValid =  false; 
		}
		return isValid;
	}
</script>
 