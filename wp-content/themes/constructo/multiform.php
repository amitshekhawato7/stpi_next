
<?php
/*
Template Name: MultiForm
*/

include('header.php');
$servername   = 'localhost';
$database = 'stpinext';
$username = 'stpinext';
$password = "stpinext";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
   die("Connection failed: " . $conn->connect_error);
}else{
  //echo "Connected successfully"; 
}
?>
<head>
    
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/danbars/form-builder@0.1/dist/themes/default.imports.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/danbars/form-builder@0.1/dist/themes/default.css">

<style type="text/css">/* 
  #register_form fieldset:not(:first-of-type) {
    display: none;
  } */
</style>
</head>
<?php

			print_r($_POST);die;
			//echo "111";
if(isset($_POST['submit']))
{
    if (!empty($_POST["startupname"])) 
        {
            $startupname = mysqli_escape_string($conn, $_POST["startupname"]);
            $building = mysqli_escape_string($conn, $_POST["building"]); 
            $street = mysqli_escape_string($conn, $_POST["street"]);
            $city = mysqli_escape_string($conn, $_POST["city"]);
            $state = mysqli_escape_string($conn, $_POST["state"]); 
            $country = mysqli_escape_string($conn, $_POST["country"]);
            $pin = mysqli_escape_string($conn, $_POST["pin"]);
            $person = mysqli_escape_string($conn, $_POST["person"]);
            $designation = mysqli_escape_string($conn, $_POST["designation"]);
            $mobile = mysqli_escape_string($conn, $_POST["mobile"]);
            $email = mysqli_escape_string($conn, $_POST["email"]);  
            $team = mysqli_escape_string($conn, $_POST["team"]);  
            $name = mysqli_escape_string($conn, $_POST["name"]);  
            $designation = mysqli_escape_string($conn, $_POST["designation"]);  
            $experience = mysqli_escape_string($conn, $_POST["experience"]);  
            $idea = mysqli_escape_string($conn, $_POST["idea"]);  
            $problemsolving = mysqli_escape_string($conn, $_POST["problemsolving"]);  
            $solution = mysqli_escape_string($conn, $_POST["solution"]);  
            $customer = mysqli_escape_string($conn, $_POST["customer"]);  
            $marketpotential = mysqli_escape_string($conn, $_POST["marketpotential"]);  
            $competitors = mysqli_escape_string($conn, $_POST["competitors"]);  
            $differentfromcompetitors = mysqli_escape_string($conn, $_POST["differentfromcompetitors"]);  
            $usp = mysqli_escape_string($conn, $_POST["usp"]);  
            $stations = mysqli_escape_string($conn, $_POST["stations"]);  
            $funding = mysqli_escape_string($conn, $_POST["funding"]);
            $platforms = mysqli_escape_string($conn, $_POST["platforms"]);
            $facilities = mysqli_escape_string($conn, $_POST["facilities"]);
			


              if (($_FILES['othersfounders']['name']!="")||($_FILES['businessproposal']['name']!=""))
                {
                  // Where the file is going to be stored
                $target_dir = "C:/xampp/htdocs/stpinext/wp-content/themes/constructo/files/others_founders/";
                $target_dir2 = "C:/xampp/htdocs/stpinext/wp-content/themes/constructo/files/business_proposal/";
                $file = $_FILES['othersfounders']['name'];
                $file2 = $_FILES['businessproposal']['name'];
                $path = pathinfo($file);
                $path2 = pathinfo($file2);
                $filename = $path['filename'];
                $filename2 = $path2['filename'];
                $ext = $path['extension'];
                $ext2 = $path2['extension'];
                $temp_name = $_FILES['othersfounders']['tmp_name'];
                $temp_name2 = $_FILES['businessproposal']['tmp_name']; 
                $path_filename_ext = $target_dir.$filename.".".$ext; 
                $path_filename_ext2 = $target_dir2.$filename2.".".$ext2;  
                    if (file_exists($path_filename_ext)||file_exists($path_filename_ext2))
                      {
                       echo '<script>alert("This File already exists. Please try with another file......")</script>';
                      }
                    else
                      {
                        if(move_uploaded_file($temp_name,$path_filename_ext)||move_uploaded_file($temp_name2,$path_filename_ext2)){
                        echo '<script>alert("Your file & data is saved Successfully.....")</script>';
                        }           
                        /*$query = "INSERT INTO xxstp_man_self_dec_files(lgn_id,r_number,filepath,filename) VALUES ('$lgn_id','$r_number','$path_filename_ext','$file')";
                        $connp->query($query) or die("Error : ".mysqli_error($connp)); */              
                      }
                  } 

            $query = "INSERT INTO stpinext_start_up_details (startup_name, startup_building, startup_street, startup_city, startup_state, 
			startup_country, startup_pin, startup_cp_name, startup_designation,startup_mobile,startup_email) VALUES('$startupname', '$building', 
			'$street', '$city', '$state', '$country', '$pin', '$person', '$designation', '$mobile','$email')"; 
            $run = mysqli_query($conn, $query);
            $query2 = "SELECT startup_id FROM stpinext_start_up_details ORDER BY startup_id DESC;";
            $rs = mysqli_query($conn, $query2); 
            $rslt = mysqli_fetch_assoc($rs);
            $last_id = $rslt['startup_id'];
            $promoters = "INSERT INTO stpinext_details_promotors(startup_id, promotors_size_team, promotors_name, promotors_designation, 
			promotors_experience, promotors_file_name, promotors_file_path) VALUES('$last_id','$team','$name','$designation','$experience','$filename',
			'$path_filename_ext')";
            $run2 = mysqli_query($conn, $promoters); 
            $idea = "INSERT INTO stpinext_your_idea(startup_id, idea_describe_your_idea, idea_prblm_solving, idea_your_solution, idea_your_customer, 
			idea_market_potential, idea_compositors, idea_different_from_competitors, idea_usp, idea_business_proposal_file_name, 
			idea_business_proposal_file_path) VALUES('$last_id', '$idea', '$problemsolving', '$solution', '$customer', '$marketpotential', 
			'$competitors', '$differentfromcompetitors', '$usp', '$filename2', '$path_filename_ext2')";
            $run3 = mysqli_query($conn, $idea);
            $requirestpinext = "INSERT INTO stpinext_require_from_stpinext(startup_id, require_stations, require_funding, require_services, 
			require_uses) VALUES('$last_id', '$stations', '$funding', '$platforms', '$facilities')";
           // echo $requirestpinext;
            $run4 = mysqli_query($conn, $requirestpinext);
        } else {
            echo '<script>alert("Please fill all required fields")</script>';
        } 
}
?>
    
    <div class="container"> 
    <h2>Apply Now</h2>       
    <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
    <div class="alert alert-success hide"></div>    
    <form id="register_form" novalidate action=""  method="post" enctype="multipart/form-data">    
    <!--<fieldset>
        <h2>
            Step 1: Add Account Details
        </h2>
        <div class="form-group"> 
            <input type="hidden" name="_charset_" />
            <section><h2>Personal Details</h2>
                <div class="form-field form-text form-text required">
                    <label for="startupname">Name of start-up<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="startupname" 
                            name="startupname"  
                             
                            placeholder="Please fill your start-up name" > </input>
                        <i class="fas fa-user-tie" aria-hidden="true"></i> 
                    </div> 
                </div>
            </section>
            <section><h2>Address</h2>    
                <div class="form-field form-text form-text required">
                    <label for="building">Building/Floor<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="building" 
                            name="building"  
                             
                            placeholder="Please fill Building/Floor name" > </input>
                        <i class="fas fa-building" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="street">Street/Road<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="street" 
                            name="street"  
                             
                            placeholder="Please fill Street/Road name" > </input>
                        <i class="fas fa-road" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="city">City<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="city" 
                            name="city"  
                             
                            placeholder="Please fill City name" > </input>
                        <i class="fas fa-city" aria-hidden="true"></i> 
                    </div> 
                </div> 
                <div class="form-field form-text form-text required">
                    <label for="state">State<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="state" 
                            name="state"  
                             
                            placeholder="Please fill State name" > </input>
                        <i class="fas fa-chess-bishop" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="country">Country<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="country" 
                            name="country"  
                             
                            placeholder="Please fill Country name" > </input>
                        <i class="fas fa-globe" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="pin">PIN<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="pin" 
                            name="pin"  
                             
                            placeholder="Please fill PIN name" > </input>
                        <i class="fas fa-map-pin" aria-hidden="true"></i> 
                    </div> 
                </div>
            </section> 
            <section><h2>Contact person details</h2>
                <div class="form-field form-text form-text required">
                    <label for="person">Contact Person Name<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="person" 
                            name="person"  
                             
                            placeholder="Please fill Contact Person name" > </input>
                        <i class="fas fa-male" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="designation">Designation<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="designation" 
                            name="designation"  
                             
                            placeholder="Please fill Designation" > </input>
                        <i class="fas fa-user-shield" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="mobile">Mobile<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="mobile" 
                            name="mobile"  
                             
                            placeholder="Please fill Mobile Number" > </input>
                        <i class="fas fa-mobile" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-email required">
                    <label for="email">Email<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="email" 
                            id="email" 
                            name="email" 
                            
                            
                            
                            
                            placeholder="Please fill your email" > </input>
                        <i class="fas fa-envelope" aria-hidden="true"></i> 
                    </div>
                        <span class="form-hint">We hate spam too. We will never spam you.</span>
                </div>
            </section> 
        </div>
    <input type="button" class="next-form btn btn-info" value="Next" />
    </fieldset> -->
    <fieldset>
    <h2> Step 2: Add Personal Details</h2>
    <div class="form-group">
        <input type="hidden" name="_charset_" />
            <section><h2>Details of the Promoters/Founders</h2>
                <div class="form-field form-text form-text required">
                    <label for="teamsize">Size of the Founding Team<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="teamsize" 
                            name="teamsize"  
                            required 
                            placeholder="Please fill size of your Team" > </input>
                        <i class="fas fa-users" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="username">Name<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="username" 
                            name="username"  
                            required 
                            placeholder="Please fill Name" > </input>
                        <i class="fas fa-user-tie" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="designation">Designation<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="designation" 
                            name="designation"  
                            required 
                            placeholder="Please fill Designation" > </input>
                        <i class="fas fa-user-shield" aria-hidden="true"></i> 
                    </div> 
                </div>
               <div class="form-field form-text form-text required">
                    <label for="experience">Experience<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text" 
                            id="experience" 
                            name="experience"  
                            required 
                            placeholder="Please fill Experience" > </input>
                        <i class="fas fa-people-carry" aria-hidden="true"></i> 
                    </div> 
                </div>
               <div class="form-field form-text form-text required">
                    <label for="othersfounders">Other founders details</label>
                    <div class="input-wrapper with-icon">
                        <input type="file" 
                            id="othersfounders" 
                            name="othersfounders"  
                            > </input>
                        <i class="fas fa-file-pdf" aria-hidden="true"></i> 
                    </div> 
                </div>
            </section> 
    </div>
    <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
    <input type="button" name="next" class="next-form btn btn-info" value="Next" />
    </fieldset>
    
   <!-- <fieldset>
    <h2>Step 3: Add Contact Information</h2>
    <div class="form-group">
        <input type="hidden" name="_charset_" />
            <section><h2>What is your Idea?</h2>
                <div class="form-field form-text form-text required">
                    <label for="idea">Briefly describe your idea?<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <textarea 
                            id="idea" 
                            name="idea"  
                            required 
                            placeholder="Briefly describe your idea?" > </textarea>
                        <i class="fas fa-comment-alt" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="problemsolving">What problem are you solving?<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <textarea 
                            id="problemsolving" 
                            name="problemsolving"  
                            required 
                            placeholder="What problem are you solving?" > </textarea>
                        <i class="fas fa-comment-alt" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="solution">What is your solution?<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <textarea 
                            id="solution" 
                            name="solution"  
                            required 
                            placeholder="What is your solution?" > </textarea>
                        <i class="fas fa-comment-alt" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="customer">Who will be your customer?<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <textarea 
                            id="customer" 
                            name="customer"  
                            required 
                            placeholder="Who will be your customer?" > </textarea>
                        <i class="fas fa-comment-alt" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="marketpotential">Describe your market potential<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <textarea 
                            id="marketpotential" 
                            name="marketpotential"  
                            required 
                            placeholder="Describe your market potential" > </textarea>
                        <i class="fas fa-comment-alt" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="competitors">Do you have any Competitors?<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <textarea 
                            id="competitors" 
                            name="competitors"  
                            required 
                            placeholder="Do you have any Competitors?" > </textarea>
                        <i class="fas fa-comment-alt" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="differentfromcompetitors">How are you different from your competitor?<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <textarea 
                            id="differentfromcompetitors" 
                            name="differentfromcompetitors"  
                            required 
                            placeholder="How are you different from your competitor?" > </textarea>
                        <i class="fas fa-comment-alt" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="usp">What is your USP ( Unique Selling Point)?<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <textarea 
                            id="usp" 
                            name="usp"  
                            required 
                            placeholder="What is your USP ( Unique Selling Point)?" > </textarea>
                        <i class="fas fa-comment-alt" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="businessproposal">Detailed Business Proposal explaining your idea as well as your need</label>
                    <div class="input-wrapper with-icon">
                        <input type="file" 
                            id="businessproposal" 
                            name="businessproposal"  
                            > </input>
                        <i class="fas fa-file-pdf" aria-hidden="true"></i> 
                    </div> 
                </div>
            </section>  
    </div>
    <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
    <input type="button" name="next" class="next-form btn btn-info" value="Next" />
    </fieldset>
    <fieldset>
    <h2>Step 4: Submit Information</h2>
    <div class="form-group">
        <input type="hidden" name="_charset_" />
            <section><h2>What do you require from STPINEXT</h2>
                <div class="form-field form-text form-text required">
                    <label for="stations">Number of work stations required<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text"  
                            id="stations" 
                            name="stations"  
                            required 
                            placeholder="Number of work stations required" > </input>
                        <i class="fas fa-network-wired" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-text form-text required">
                    <label for="funding">Seed Funding , if any<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                        <input type="text"  
                            id="funding" 
                            name="funding"  
                            required 
                            placeholder="Seed Funding , if any" > </input>
                        <i class="fas fa-search-dollar" aria-hidden="true"></i> 
                    </div> 
                </div>
                <div class="form-field form-checkbox required">
                    <div class="input-wrapper with-icon">
                        <fieldset style="padding: 0px 0px 25px 25px;">
                            <legend><i class="fas fa-desktop" aria-hidden="true"></i>Services<abbr class="required" title="required">*</abbr></legend>
                        <div class="checkboxwrapper"><input type="checkbox" name="platforms"  value="Lab" id="platforms0" >
                    <label for="platforms0">Lab</label></div>
                    <div class="checkboxwrapper"><input type="checkbox" name="platforms"  value="Mentoring" id="platforms1" >
                    <label for="platforms1">Mentoring</label></div>
                    <div class="checkboxwrapper"><input type="checkbox" name="platforms"  value="Marketing" id="platforms2" >
                    <label for="platforms2">Marketing</label></div>
                    <div class="checkboxwrapper"><input type="checkbox" name="platforms"  value="Patenting" id="platforms3" >
                    <label for="platforms3">Patenting</label></div>
                        <div class="checkboxwrapper"><input type="checkbox" name="platforms"  value="Registration/Incorporation" id="platforms4" >
                    <label for="platforms4">Registration/Incorporation</label></div>
                    <div class="checkboxwrapper"><input type="checkbox" name="platforms"  value="Legal Consulting" id="platforms5" >
                    <label for="platforms5">Legal Consulting</label></div>
                    <div class="checkboxwrapper"><input type="checkbox" name="platforms"  value="Admin, Finence" id="platforms6" >
                    <label for="platforms6">Admin, Finence</label></div>
                    <div class="checkboxwrapper"><input type="checkbox" name="platforms"  value="Any other" id="platforms7" >
                    <label for="platforms7">Any other</label></div>

                        </fieldset>
                    </div> 
                </div>
                <div class="form-field form-select required">
                    <label for="facilities">How regularly you will use STPINEXT services and facilities?<abbr class="required" title="required">*</abbr></label>
                    <div class="input-wrapper with-icon">
                            <select id="facilities" name="facilities" required> 
                                <option value="">Select</option>
                                <option value="daily" >Daily</option>
                                <option value="weekly" >Weekly</option>
                                <option value="monthly" >Monthly</option>
                                <option value="periodically as required" >Periodically as required</option> 
                            </select>
                        <i class="fas fa-user-astronaut" aria-hidden="true"></i> 
                    </div> 
                </div>
            </section>  
    </div>-->
    <input type="button" name="previous" class="previous-form btn btn-default" value="Previous" />
    <input type="submit" name="submit" class="submit btn btn-success" value="Submit" />
    </fieldset>
    </form> 
</div> 
    <div class=''>
    </div> 
<?php include('footer.php');?> 
<script type="text/javascript">
    $(document).ready(function(){  
  var form_count = 1, previous_form, next_form, total_forms;
  total_forms = $("fieldset").length;  
  $(".next-form").click(function(){
    previous_form = $(this).parent();
    next_form = $(this).parent().next();
    next_form.show();
    previous_form.hide();
    setProgressBarValue(++form_count);
  });  
  $(".previous-form").click(function(){
    previous_form = $(this).parent();
    next_form = $(this).parent().prev();
    next_form.show();
    previous_form.hide();
    setProgressBarValue(--form_count);
  });
  setProgressBarValue(form_count);  
  function setProgressBarValue(value){ 
    var percent = parseFloat(100 / total_forms) * value;
    percent = percent.toFixed();
    $(".progress-bar")
      .css("width",percent+"%")
      .html(percent+"%");   
  } 
  // Handle form submit and validation
  /*$( "#register_form" ).submit(function(event) {    
    var error_message = '';
    if(!$("#building").val()) {
        error_message+="Please Enter Building Name";
    }
    if(!$("#street").val()) {
        error_message+="<br>Please Fill Street Name";
    }
    if(!$("#city").val()) {
        error_message+="<br>Please Fill City Name";
    }
    if(!$("#state").val()) {
        error_message+="<br>Please Fill State Name";
    }
    if(!$("#country").val()) {
        error_message+="<br>Please Fill Country Name";
    }
    if(!$("#pin").val()) {
        error_message+="<br>Please Fill PIN";
    }
    if(!$("#person").val()) {
        error_message+="<br>Please Fill Contact Person Name";
    }
    if(!$("#designation").val()) {
        error_message+="<br>Please Fill Contact Person Designation";
    }
    if(!$("#mobile").val()) {
        error_message+="<br>Please Fill Contact Person Mobile Number";
    }
    if(!$("#email").val()) {
        error_message+="<br>Please Fill Contact Person Email ID";
    }
    // Display error if any else submit form
    if(error_message) {
        $('.alert-success').removeClass('hide').html(error_message);
        return false;
    } else {
        return true;    
    }    
  });*/
});
</script>