<?php
include './connect.php';

#create database
$sql = 'CREATE DATABASE WCF';
if($con->query($sql) == TRUE){
 echo 'db created';
}
else{
 die("error".$con->error);
}




?>