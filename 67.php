<?php
$dsn="mysql:host=localhost;dbname=test_db";
$db_user="root";
$db_user="";

try
{
$con=new PDO($dsn,$db_user,$db_password);
$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
echo "Connected";
if(isset($_REQUEST['edit']))
{
if(($_REQUEST['id']=="")||($_REQUEST['name']=="")||($_REQUEST['roll']=="")||($_REQUEST['address']=="")){echo "Fill All Field";}
else
{
$sql="UPDATE student SET id=:id,name=:name,roll=:roll,address=:address WHERE id=:id";
$result=$con->preapare($sql);

$result->bindParam(':id',$id,PDO::PARAM_STR);
$result->bindParam(':name',$name,PDO::PARAM_INT);
$result->bindParam(':roll',$roll,PDO::PARAM_STR);
$result->bindParam(':address',$address,PDO::PARAM_INT);


$id=$_REQUEST['id'];
$name=$_REQUEST['name'];
$roll=$_REQUEST['roll'];
$address=$_REQUEST['address'];

$result->execute();
$row=$result->fetch(PDO::FETCH_ASSOC);		
}
}
}
catch(PDOException $e)
{
echo "Connection Failed".$e->getMessage();	
}


set in the form 
<input value='.$row["id"].'>

<?php if(isset($row['address'])) { echo $row['address'];} ?>

?>
 


