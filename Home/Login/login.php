<?php
include '../../Config/connect.php';

$username = $_REQUEST['username'];
$pass = $_REQUEST['password'];

$sql = "SELECT password,fname FROM workersfund WHERE email = '$username'";
$db = $con->query($sql);



if($db->num_rows>0){
 while($row=$db->fetch_assoc()){
 if(!password_verify($pass, $row['password'])){
  echo "not a user";
 }
 else{
  header("location:../addition/function.php");
 }


 }



}
else{
 echo "wrong credentials";
}


?>