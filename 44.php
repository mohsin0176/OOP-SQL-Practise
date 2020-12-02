<?php
$dsn="mysql:host=localhost;dbname=test_db";
$db_user="root";
$db_password="";

try
{
$con=new PDO($dsn,$db_user,$db_password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connected";
if(isset($_REQUEST['delete']))
{
$sql="DELETE FROM student WHERE id={$_REQUEST['id']}";
$result=$con->exec($sql);
echo "Deleted";	
}
else
{
echo "Delete not";	
}	
}
catch(PDOException $e)
{
echo "Connection Failed".$e->getMessage();	
}
 
set in the form
echo "ID:".$row['id']."NAME:".$row['name']."ROLL:".$row['roll']."ADDRESS:".$row['address'].<input type="hidden" name="id" value='.$row['id']'>; 

?>