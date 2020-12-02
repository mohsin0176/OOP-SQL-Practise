<?php
$dsn="mysql:host=localhost;dbname=test_db";
$db_user="root";
$db_password="";

try
{
$con=new PDO($dsn,$db_user,$db_password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connected";	
if(isset($_REQUEST['submit']))
{
if(($_REQUEST['name']==""||$_REQUEST['roll']==""||$_REQUEST['address']==""))
{echo "Fill All Field";}
else
{
$name=$_REQUEST['name'];
$roll=$_REQUEST['roll'];
$roll=$_REQUEST['roll'];
$sql="INSERT INTO student(name,roll,address)VALUES('$name','$roll','$address')";
$result=$con->exec($sql);
echo"Insertion Complete";	
}
}
else
{
echo"Can Not Insert Data";	
}
}
catch(PDOException $e)
{
echo "Connection Failed".$e->getMessage();	
}

?>