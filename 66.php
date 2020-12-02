<?php
$dsn="mysql:host=localhost;dbname=test_db";
$db_user="root";
$db_user="";

try
{
$con=new PDO($dsn,$db_user,$db_password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connected";
if(isset($_REQUEST['delete']))
{
$sql="DELETE FROM student WHERE id=:id";
$result=$con->prepare(sql);
$result->bindParam(':id',$id,PDO::PARAM_INT);
$id=$_REQUEST['id'];
$result->execute();
$result->rowCount();
unset($result);	
}
}
catch(PDOException $e)
{
echo "Connection Failed".$e->getMessage();	
}


set in the FROM
value='.$row["id"].'
?>