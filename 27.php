<?php

if (isset($_REQUEST['submit'])) 
{
if ($_REQUEST['name']==""||$_REQUEST['roll']==""||$_REQUEST['address']=="") 
{
	echo "Fill All Field";
}

else
{
$name=$_REQUEST['name'];
$roll=$_REQUEST['roll'];
$address=$_REQUEST['address'];
$sql="INSERT INTO student(name,roll,address) VALUE('$name','$roll','$address')";
if(mysqli_query($con,$sql))
{
echo" DATA INSERT SUCCESS";	
}
}	 
}

?>