
<?php
include '../../Config/connect.php';

$fullnames = $_REQUEST['fullnames'];
$experience = $_REQUEST['exp'];
$profession = $_REQUEST['prof'];

//create the UniqueID
$uniqueID = uniqid();
//Submit data to table
$sql = "INSERT INTO interns(fullnames, experience, profession, UniqueID)
                     VALUES('$fullnames','$experience','$profession', '$uniqueID')";

if(mysqli_query($con, $sql)){
 header("location:function.php");
}
else{
 die("error".$con->error);
}