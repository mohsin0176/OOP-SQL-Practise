<?php
$dsn="mysql:host=localhost;dbname=test_db";
$db_user="root";
$db_user="";

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

?>