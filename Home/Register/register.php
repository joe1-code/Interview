<?php
include '../../Config/connect.php';

$firstname = $_REQUEST['fname'];
$lastname = $_REQUEST['lname'];
$dob = $_REQUEST['DOB'];
$office = $_REQUEST['office'];
$occupation = $_REQUEST['occupation'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

#preventation of sql injection
$sanitizedFname = $con->real_escape_string($firstname);
$sanitizedLname = $con->real_escape_string($lastname);
$sanitizedDOB = $con -> real_escape_string($dob);
$sanitizedOffice = $con->real_escape_string($office);
$sanitizedOccupation = $con->real_escape_string($occupation);
$sanitizedEmail = $con -> real_escape_string($email);
$sanitizedPass = $con->real_escape_string($password);
#hash the password for security
$pass = password_hash($sanitizedPass, PASSWORD_DEFAULT);

#create the unique ID for the user
$userID = uniqid();

$sql = "INSERT INTO workersfund(fname, lname, DOB, office, occupation, email, password, uid)
                          VALUES('$sanitizedFname', '$sanitizedLname', '$sanitizedDOB', '$sanitizedOffice', '$sanitizedOccupation', '$sanitizedEmail', '$pass', '$userID')";

if(mysqli_query($con, $sql)){
 header("location:../Login/login.html");
}
else{
 die("not registered user".$mysqli_error);
}





?>