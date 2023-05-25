<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="./index.css">
<meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
</head>
<body>
 <table>
  <tr>
   <th>S/N</th>
   <th>FirstName</th>
   <th>LastName</th>
   <th>Office</th>
   <th>DOB</th>
   <th>Occupation</th>
   <th>Email</th>
  </tr>
  <tr>
     
   <?php
   include '../Config/connect.php';

   $sql = "SELECT * FROM workersfund";
   $db = $con->query($sql);

   if($db->num_rows>0){
    $i=0;
    while($row=$db->fetch_assoc()){
     

     ?>
     <td><?php echo $i+1; ?></td>
     <td><?php echo $row['fname'];?></td>
     <td><?php echo $row['lname'];?></td>
     <td><?php echo $row['office'];?></td>
     <td><?php echo $row['DOB'];?></td>
     <td><?php echo $row['occupation'];?></td>
     <td><?php echo $row['email'];?></td>

   
  </tr>
  
   <?php
    $i++;
   }
   
  }
  
  ?>
  
 </table>
</body>
</html>


