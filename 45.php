<?php
$dsn="mysql:host=localhost;dbname=test_db";
$db_user="root";
$db_password="";

try
{
$con=new PDO($dsn,$db_user,$db_password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connected";	
if(isset($_REQUEST['update']))
{
if(($_REQUEST['name']==""||$_REQUEST['roll']==""||$_REQUEST['address']==""))
{echo "Fill All Field";}
else
{
$name=$_REQUEST['name'];
$roll=$_REQUEST['roll'];
$roll=$_REQUEST['roll'];
$sql="UPDATE  student set name='$name',roll='$roll',address='$address' WHERE id={$_REQUEST['id']}";
$result=$con->exec($sql);
echo"Update Complete";	
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
 

set in the FROM
<input type="text" name="id" value='.$id.'>

set in the form 

<input type="text"class="form-control" name="address",id="id",value="<?php if isset($row['address']){echo $row['address']} ?>">

?>