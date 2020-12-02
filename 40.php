<?php
$dsn="mysql:host=localhost;dbname=test_db";
$db_user="root";
$db_password="";

try
{
$con=new PDO($dsn,$db_user,$db_password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connected";	
}
catch(PDOException $e)
{
echo "Connection Failed".$e->getMessage();	
}

$sql="SELECT *FROM student";
$result=$con->query($sql);

echo $result->rowCount();

?>