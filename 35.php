<?php

 $conn=new mysqli($db_host,$db_user,$db_password,$db_name);
 if ($conn->connect_error) 
 {
 die("Coonect Failed");
 }

 else
 {
 echo "Connected";
 if (isset($_REQUEST['edit'])) 
 {
 $id=$_REQUEST['id'];
 $name=$_REQUEST['name'];
 $roll=$_REQUEST['roll'];
 $address=$_REQUEST['address'];
 $sql="UPDATE student set id='$id',name='$name',roll='$roll',address='$address', WHERE id={$_REQUEST['id']}";
 if ($conn->query($sql)===TRUE) 
 {
 echo "Reord  Updated";
 }
 else
 {
 echo "Unable to Updated";	
 }
 }
 }


 set in the form button <input type="submit" name="edit" value=".$row['id'].">
 set in the opened form  
 value="<?php if(isset($row["name"])) { echo $row["name"];} ?>";

?>