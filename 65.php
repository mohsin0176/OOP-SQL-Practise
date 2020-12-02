<?php
$dsn="mysql:host=localhost;dbname=test_db";
$db_user="root";
$db_user="";

try
{
$con=new PDO($dsn,$db_user,$db_password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connected";
if(isset($_REQUEST['submit']))
{
if(($_REQUEST['id']=="")||($_REQUEST['name']=="")||($_REQUEST['roll']=="")||($_REQUEST['address']==""))	{echo "Fill All field";}
else
{
$sql="INSERT INTO student(id,name,roll,address) VALUES(:id,:name,:roll,:address)";
$result=$con->prepare($sql);
$result->bindParam(':id',$id,PDO::PARAM_STR);
$result->bindParam(':name',$name,PDO::PARAM_STR);
$result->bindParam(':roll',$roll,PDO::PARAM_STR);	
$result->bindParam(':address',$address,PDO::PARAM_STR);	
$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$roll=$_REQUEST['roll'];
$address=$_REQUEST['address'];	
$result->execute(array(':id'=>$id,':name'=>$name,':roll'=>$roll,':address'=>$address,));	
$result->rowCount();
}
}
}
catch(PDOException $e)
{
echo "Connection Failed".$e->getMessage();	
}

?>