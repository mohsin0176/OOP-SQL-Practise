<?php

session_start();
if(isset($_REQUEST['username'])||isset($_REQUEST['password']))
{
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];

	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
if(isset($_SESSION['username'])||isset($_SESSION['password']))
{
echo "USERNAME:".$_SESSION['username']."PASSWORD:".$_SESSION['password']."<br>";	
echo "<script>location.href='welcome.php'</script>";	
}
elseif (isset($_REQUEST['logout'])) 
{
session_unset();
session_destroy();
echo "<script>location.href='login.php'</script>";
}	
	
}

?>