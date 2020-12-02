<?php

 $conn=new mysqli($db_host,$db_user,$db_password,$db_name);
 if ($conn->connect_error) 
 {
 die("Coonect Failed");
 }

 else
 {
 echo "Connected";
 if (isset($_REQUEST['delete'])) 
 {
 $sql="DELETE FROM student WHERE id={$_REQUEST['id']}";
 if ($conn->query($sql)===TRUE) 
 {
 echo "Reord Deleted";
 }
 else
 {
 echo "Unable to delete";	
 }
 }
 }



 set in the form button <input type="submit" name="delete" value=".$row['id'].">

?>