<?php
/*
Template Name: data
*/
include "header.php";
$servername = "localhost";
$username = "stpinext";
$password = "stpinext";

// Create connection
$conn = new mysqli($servername, $username, $password);
if (isset($_POST["submit"])) 
    {   
        print_r($_REQUEST); 
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
            $query = "INSERT INTO stpinext_start_up_details (startup_name, startup_building, startup_street, startup_city, startup_state, startup_country, startup_pin, startup_cp_name, startup_designation,startup_mobile,startup_email) VALUES('$startupname', '$building', '$street', '$city', '$state', '$country', '$pin', '$person', '$designation', '$designation','$mobile','$email')";
            $run = mysqli_query($connp, $query);
        } else {
            echo '<script>alert("Please fill all required fields")</script>';
        }
    }

?>