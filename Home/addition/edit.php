<?php
session_start();
include '../../Config/connect.php';
//UPDATE THE DB
$DataID = $_REQUEST['data'];
$fulname = $_REQUEST['fullnames'];
$exp = $_REQUEST['exp'];
$prof = $_REQUEST['prof'];


$userID=($_SESSION['userID']);

$update = "UPDATE interns SET fullnames = '$fulname', experience = '$exp', profession = '$prof' WHERE UniqueID = '$userID'";

if($con->query($update) == TRUE){
 header("location:./function.php");
}
else{
 echo "did not update".$con->error;
}


?>
 
