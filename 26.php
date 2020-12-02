<?php

mysqli_query($con,$sql,$result);
mysqli_result = mysqli_use_result()/mysqli_store_result()/mysqli_query()
$result = mysqli_use_result()/mysqli_store_result()/mysqli_query();
mysqli_num_rows($result);
mysqli_fetch_assoc($result);
mysqli_error($con);

$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
$sql="SELECT *FROM student";
$result=mysql_query($con,$sql);
$row=mysqli_fetch_assoc($result);


if (mysqli_num_rows($result)>0) 
{
 
while ($row=mysqli_fetch_assoc($result)) {
	
echo "ID".$row["id"]."NAME:".$row["name"]."ROLL".$row["roll"]."ADDRESS:".$row["address"]."<br>";
}

}

else
{
echo "0 Results";	
}

?>