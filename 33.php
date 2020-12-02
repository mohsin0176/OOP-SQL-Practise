<?php

if (isset($_REQUEST['submit'])) 
{
$conn=new mysqli($db_host,$db_user,$db_password,$db_name);
if ($conn->connect_error) 
{
die("Connection Failed");
}
else
{
echo "Connection Successfully";
if ($_REQUEST['name']==""||$_REQUEST['roll']==""||$_REQUEST['address']=="") 
{
	echo "Fill All Field";
}
else
{
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$roll=$_REQUEST['roll'];
$address=$_REQUEST['address'];
$sql="INSERT INTO student(name,roll,address) VALUES('$id','$name','$roll','$address')";
$result=$conn->query($sql);	
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
	echo"ID:".$row['id'];
	echo"NAME:".$row['name'];
	echo"ROLL:".$row['roll'];
	echo"ADDRESS:".$row['address'];
}	
}	
}	
}
}


?>