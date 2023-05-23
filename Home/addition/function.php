
<!DOCTYPE html>
<html lang="en">
<head>
 <link rel="stylesheet" href="./func.css">
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Document</title>
 
</head>
<body>
 <form action="postdata.php" method='post'>
  <div>
   <label for="fullnames">Fullnames:</label>
   <input type="text" name='fullnames' required>
  </div>
  <br>
  <div>
   <label for="exp">Experience:</label>
   <input type="text" name='exp' required>
  </div>
  <br>
  <div>
   <label for="prof">Profession:</label>
   <input type="text" name='prof' required>
  </div>
  <br>
  <div>
   <button>Addition</button>
  </div>
 </form>
  <br>
  <br>
 <div>
  <table>
   <tr>
    <th>S/N</th>
    <th>Fullnames</th>
    <th>Experience</th>
    <th>Profession</th>
    <th>Action</th>
   </tr>
   <tr>
    <?php
      include '../../Config/connect.php';


      //Call the data from db

      $data = "SELECT * FROM interns";
      $db = $con->query($data);

      if($db->num_rows>0){
       $i = 0;
       while($row = $db->fetch_assoc()){
        
     ?>
       <td><?php echo $i+1; ?></td>
       <td><?php echo $row['fullnames']; ?></td>
       <td><?php echo $row['experience']; ?></td>
       <td><?php echo $row['profession']; ?></td>

       <td>
        <form action="delete.php" action='post'>
         <input type="hidden" name='delete' value="<?php echo $row['UniqueID'];?>"/>
         <input type="submit" value='delete'/>
        </form>
       </td>
    </tr>  
       <?php
       $i++;
       }
      }
      ?>
     
  
  </table>
 </div>
</body>
</html>


