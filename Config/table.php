<?php
include './connect.php';

$sql = "CREATE TABLE workersfund(id int NOT NULL AUTO_INCREMENT,
                                 fname VARCHAR(100),
                                 lname VARCHAR(100),
                                 office VARCHAR(100),
                                 DOB VARCHAR(100),
                                 occupation VARCHAR(100),
                                 email VARCHAR(100),
                                 password VARCHAR(100),
                                 PRIMARY KEY(id)
                  )";

if($con->query($sql) == TRUE){
 echo "table created successfully";
}
else{
 die("table not created".$con->error);
}




?>