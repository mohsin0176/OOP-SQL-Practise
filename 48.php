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
$sql="SELECT *FROM student";
$result=mysqli_prepare($con,$sql);
mysqli_stmt_bind_result($result,$id,$name,$roll,$address);
mysqli_stmt_execute($result);
mysqli_stmt_fetch($result);
mysqli_stmt_store_result($result);

if (mysqli_stmt_num_rows($result)>0) 
{
foreach ($print=mysqli_stmt_store_result($result) as $row) 
{
echo "ID:".$row['id']."NAME:".$row['name']."ROLL:".$row['roll']."ADDRESS:".$row['address'];
}
}

?>