<?php



if (isset($_REQUEST['update'])) 
{
$name=$_REQUEST['name'];	
$roll=$_REQUEST['roll'];
$address=$_REQUEST['address'];
$con=mysqli_connect($db_host,$db_user,$db_password,$db_name);
$sql="UPDATE  student set name='$name',roll='$roll',address='$address' WHERE id={$_REQUEST['id']}";
$result=mysql_query($con,$sql);
$row=mysqli_fetch_assoc($result);

if (mysqli_num_rows($result)>0) 
{
 
while ($row=mysqli_fetch_assoc($result)) 
{
	
echo "ID".$row["id"]."NAME:".$row["name"]."ROLL".$row["roll"]."ADDRESS:".$row["address"]."<input type="submit" name="update" value=".$row["id"]."">"."<br>";
}

}




else
{
echo" DATA UPDATE Failed";	
}


set in value field of form
value="<?php if (isset($row["name"])) { echo $row["name"];} ?>"

?>