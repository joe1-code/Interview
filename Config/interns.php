<?php
include './connect.php';

$sql = "CREATE TABLE interns(id int NOT NULL AUTO_INCREMENT,
                             fullnames VARCHAR(100),
                             experience INT(100),
                             profession VARCHAR(100),
                             PRIMARY KEY(id)
                             )";

if($con->query($sql)){
 echo "interns table created";
}
else{
 die("error".$con->error);
}





?>