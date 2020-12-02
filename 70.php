<?php

session_start();
$username='GeekyShow';
$_SESSION['username']=$username;
$_SESSION['password']='123456';

echo "Username".$_SESSION['username']."<br>";
echo "Password".$_SESSION['password']."<br>";


if(isset($_SESSION['username']))
{
echo "Session Variable Is Set";	
}
else
{
echo "Session Variable Is Not Set";		
}

?>