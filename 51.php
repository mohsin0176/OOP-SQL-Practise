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

if(isset($_REQUEST['delete']))
{
$sql="DELETE *FROM student WHERE id=?";	
$result=mysqli_prepare($con,$sql);
if($result)
{
mysqli_stmt_bind_param($result,'i',$id);
$id=$_REQUEST['id'];
mysqli_stmt_execute($result);
mysqli_stmt_affected_rows($result);
}	
}
else{echo "Can Not Delete";}

 
mysqli_stmt_close($result);

set in the FROM
<input type="text" name="id" value='.$id.'>

?>

