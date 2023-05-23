<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wcf";

$con =new mysqli($servername,  $username,$password, $dbname);

if($con->connect_error){
 die("error".$con->connect_error);
}
else{
 // echo "successfully connected";
}


// $con->close();

?>