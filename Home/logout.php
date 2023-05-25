<?php
session_start();

//clear all the session variables
$_SESSION = array();

//destroy the sessions

session_destroy();

//heading to the login form
header("location:./Login/login.html");

exit();




?>