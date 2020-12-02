<?php
$dsn="mysql:host=localhost;dbname=test_db";
$db_user="root";
$db_user="";

try
{
$con=new PDO($dsn,$db_user,$db_password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connected";
$sql="SELECT * FROM student";
$result=$con->prepare($sql);
$result->execute();
$result->bindColumn(1,$id);
$result->bindColumn(1,$name);
$result->bindColumn(1,$roll);
$result->bindColumn(1,$address);
if($result->rowcount()>0)
{
while($row=$result->fetch(PDO::FETCH_BOUND))
{
echo "ID:".$row['id']."NAME:".$name."ROLL:".$roll."ADDRESS:".$address."<br>";	
}	
}

}
catch(PDOException $e)
{
echo "Connection Failed".$e->getMessage();	
}
unset($result);
?>