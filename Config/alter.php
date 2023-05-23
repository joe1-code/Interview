<?php
include './connect.php';

// $sql = "ALTER TABLE workersfund ADD COLUMN(uid VARCHAR(100) NOT NULL)";
// if($con->query($sql)){
//  echo "successfully updated table";
// }
// else{
//  die("error".$con->error);
// }

// $sql = "ALTER TABLE workersfund MODIFY COLUMN DOB DATE";
// if($con->query($sql)){
//  echo "successful updated dob column";
// }
// else{
//  die("error".$con->error);
// }

// $sql = "ALTER TABLE interns ADD COLUMN (UniqueID VARCHAR(100) NOT NULL)";
// if($con->query($sql)==TRUE){
//  echo "column added";
// }
// else{
//  echo "error".$con->error;
// }

$sql = "DELETE FROM interns";
if($con->query($sql) == TRUE){
 echo "table deleted";
}
else{
 die("error".$con->error);
}


?>