<?php
include '../../Config/connect.php';

$userID = $_REQUEST['delete'];

$sql = "DELETE FROM interns WHERE UniqueID = '$userID'";
if($con->query($sql) == TRUE){
 header("location:function.php");
}
else{
 die("error".$con->error);
}




?>