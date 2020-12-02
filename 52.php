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

if(isset($_REQUEST['update']))
{
$sql="UPDATE student SET id=?,name=?,roll=?,address=? WHERE id=?";	
$result=mysqli_prepare($con,$sql);
if($result)
{
mysqli_stmt_bind_param($result,'i',$id,$name,$roll,$address);
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$roll=$_REQUEST['roll'];
$address=$_REQUEST['address'];
mysqli_stmt_execute($result);
mysqli_stmt_affected_rows($result);
}	
}
else{echo "Can Not Update";}

 
mysqli_stmt_close($result);

set in the FROM
<input type="text" name="id" value='.$id.'>
set in the form
<input type="text"class="form-control" name="address",id="id",value="<?php if isset($row['address']){echo $row['address']} ?>">

?>

