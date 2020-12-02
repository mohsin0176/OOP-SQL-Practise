<?php
$db_host="localhost";
$db_user="root";
$db_password="";
$db_name="test_db";

$con=new mysqli($db_host,$db_user,$db_password,$db_name);
if($con->connect_error)
{
	die("Connection Failed");
}
echo "Connected Successfully";
if(isset($_REQUEST['delete']))
{
$sql="DELETE FROM student WHERE id=?";
$result=$con->prepare($sql);
if($result)
{
$result->bind_param('i',$id);
$id=$_REQUEST['id'];
$result->execute();
$result->affected_rows();	
}	
}

else
{
echo "Can Not Delete";	
}


set in the FROM

<input type="text" value='.$id.'>

?>