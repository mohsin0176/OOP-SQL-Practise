<?php

$conn=new mysqli($db_host,$db_user,$db_password,$db_name);
if ($conn->connect_error) 
{
die("Connection Failed");
}
else
{
echo "Connection Successfully";
$sql="SELECT * FROM student";
$result=$conn->query($sql);
if ($result->num_rows>0) 
{
while ($row=$result->fetch_assoc()) 
{
echo"ID:".$row['id']."NAME:".$row['name']."Roll:".$row['roll']."ADDRESS:".$row['address']."<br>";
}
}
}
?>