<?php



if (isset($_REQUEST['delete'])) 
{
$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
$sql="DELETE *FROM student WHERE id={$_REQUEST['id']}";
$result=mysql_query($con,$sql);
$row=mysqli_fetch_assoc($result);

if (mysqli_num_rows($result)>0) 
{
 
while ($row=mysqli_fetch_assoc($result)) 
{
	
echo "ID".$row["id"]."NAME:".$row["name"]."ROLL".$row["roll"]."ADDRESS:".$row["address"]."<input type="submit" name="delete" value=".$row["id"]."">"."<br>";
}

}




else
{
echo" DATA DELETE Failed";	
}

?>