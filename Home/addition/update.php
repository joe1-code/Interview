<?php
include '../../Config/connect.php';

$data = $_REQUEST['update'];
$fulnames = $_REQUEST['fullnames'];
$experience = $_REQUEST['exp'];
$profession = $_REQUEST['prof'];

$sql = "UPDATE interns SET fullnames ='$fulnames' exp = '$experience' prof = '$profession' WHERE UniqueID='$data";

if($con->query($sql) == TRUE){
 echo "updated";
}
else{
 die("error".$con->error);
}





?>