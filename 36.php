<?php
 $conn=new mysqli($db_host,$db_user,$db_password,$db_name);
 if ($conn->connect_error) 
 {
 die("Coonect Failed");
 }

 else
 {
 echo "Connected";
 $sql="CREATE DATABASE new_db";
 $conn->query($sql);
---------------------------------------------

$sql="CREATE TABLE student( 
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(255),
roll INT,
address TEXT
)";
 $conn->query($sql);
-----------------------------------------------------
 $conn->query($sql);
 }

?>