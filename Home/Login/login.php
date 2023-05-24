<?php
include '../../Config/connect.php';
session_start();

$username = $_REQUEST['username'];
$pass = $_REQUEST['password'];

$sql = "SELECT password,fname FROM workersfund WHERE email = '$username'";
$db = $con->query($sql);



if($db->num_rows>0){
 while($row=$db->fetch_assoc()){
 if(!password_verify($pass, $row['password'])){
  if(isset($_SESSION['login_attempts'])){
   $_SESSION['login_attempts']++;
  }
  else{
   $_SESSION['login_attempts'] = 1;
  }
  if($_SESSION['login_attempts']>=3){
   echo "you are locked out.Please try again later";
  
  }
  else{
   echo "wrong credentials. Please try again later";
   
  }
 }
 else{
  $_SESSION['logged_in'] = TRUE;
  header("location:../addition/function.php");
  return true;
 }


 }



}
else{
 echo "wrong credentials";
}


?>