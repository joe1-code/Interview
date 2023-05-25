<?php
session_start();
 include '../../Config/connect.php';
 
 $id = $_REQUEST['update'];
 $_SESSION['userID'] = $id;
 
 $selectdata = "SELECT * FROM interns WHERE UniqueID ='$id'";
 $db = $con->query($selectdata);

 if($db->num_rows>0){
  while($row=$db->fetch_assoc()){
  ?>
  <h2>Edit User</h2>
 <form action="edit.php" method='post'>
   <div>
   <label for="fullnames">Fullnames:</label>
   <input type="text" name='fullnames' value="<?php echo $row['fullnames'];?>"/>
  </div>
  <br>
  <div>
   <label for="exp">Experience:</label>
   <input type="text" name='exp' value="<?php echo $row['experience'];?>"/>
  </div>
  <br>
  <div>
   <label for="prof">Profession:</label>
   <input type="text" name='prof' value="<?php echo $row['profession'];?>"/>
  </div>
  <br>
  
  <div><button type="submit">Update</button></div>
 </form>
 <?php
  }
 }
?>

