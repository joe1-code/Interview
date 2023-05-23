<?php
include '../../Config/connect.php';

$firstname = $_REQUEST['fname'];
$lastname = $_REQUEST['lname'];
$dob = $_REQUEST['DOB'];
$office = $_REQUEST['office'];
$occupation = $_REQUEST['occupation'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

#hash the password for security
$pass = password_hash($password, PASSWORD_DEFAULT);

#create the unique ID for the user
$userID = uniqid();

$sql = "INSERT INTO workersfund(fname, lname, DOB, office, occupation, email, password, uid)
                          VALUES('$firstname', '$lastname', '$dob', '$office', '$occupation', '$email', '$pass', '$userID')";

if(mysqli_query($con, $sql)){
 header("location:../Login/login.html");
}
else{
 die("not registered user".$mysqli_error);
}





?>