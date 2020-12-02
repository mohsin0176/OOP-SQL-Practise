<? php

prepare();
$con->prepare($sql);
$sql="INSERT INTO student (name,roll,address) VALUES(?,?,?)";
$result=$con->prepare($sql);
$result=bind_param('sis',$name,$roll,$address);
$result->execute();
$result->close();
$result->bind_result($name,$roll,$address);
$result->store_result();
$result->num_rows();
$result->free_result();

?>