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
if(isset($_REQUEST['edit']))
{
if(($_REQUEST['id'])==""||($_REQUEST['name']=="")||($_REQUEST['roll']=="")||($_REQUEST['address']==""))
{echo "Fill All The Field";}
else
{
$sql="UPDATE student SET id=?,name=?,roll=?,address=? WHERE id=? ";
$result=$con->prepare($sql);
if($result)
{
$result->bind_param('sis',$id,$name,$roll,$address);
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$roll=$_REQUEST['roll'];
$address=$_REQUEST['address'];
$result->execute();
$result->affected_rows();
$result->close();	
}	
}
}




set in the FROM

<input type="text" value='.$id.'>

value=  "<?php if(isset($address)){echo $address} ?>">

?>