<?php

$db_host="localhost";
$db_user="root"
$db_password="";
$db_name="test_db";

$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
if (!$con) 
{
die("Connection Failed".mysqli_connect_error());
}
echo "Connected";

if(isset($_REQUEST['insert']))
{
if($_REQUEST['id']==""||$_REQUEST['name']==""||$_REQUEST['roll']==""||$_REQUEST['address']==""||)
{echo "Fill ALL FIELD";}
else
{
$sql="INSERT INTO student(id,name,roll,address) VALUES(?,?,?,?)";
$result=mysqli_prepare($con,$sql);
if($result)
{
mysqli_stmt_bind_param($result,$id,$name,$roll,$address);
$id=$_REQUEST['id'];
$name=$_REQUEST['name']	;
$roll=$_REQUEST['roll'];
$address=$_REQUEST['address'];
mysqli_stmt_execute($result);
mysqli_stmt_affected_rows($result);
}	
}	
}
else{echo"Can Not Insert";}
mysqli_stmt_close($result);



?>