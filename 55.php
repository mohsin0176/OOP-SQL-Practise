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
$sql="SELECT *FROM student";
$result=$con->prepare($sql);
$result->bind_result($id,$name,$roll,$address);
$result->execute();

while($result->fetch())
{
echo "ID:".$id."NAME:".$name."ROLL:".$roll."ADDRESS".$address."<br>";	
} 

?>