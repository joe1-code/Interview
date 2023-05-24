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
  if ($_SESSION['login_attempts'] >= 3) {
    $_SESSION['lockout_time'] = time() + (1 * 60); // Lockout time in minutes.

    if (isset($_SESSION['lockout_time']) && time() < $_SESSION['lockout_time']) {
        echo "You are locked out. Please wait for 1 minute.";
    } else {
        $_SESSION['login_attempts'] = 0;
    }
}
 else{
  echo "wrong credentials. Please try again later";
   
  }
 }
 else{
  $_SESSION['logged_in'] = TRUE;
  $_SESSION['login_attempts'] = 0;
  
  header("location:../addition/function.php");
  return true;

  
 }


 }



}
else{
 echo "wrong credentials";
}


?>