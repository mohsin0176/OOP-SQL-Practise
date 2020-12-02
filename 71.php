<?php

session_start();
$username='GeekyShow';
$_SESSION['username']=$username;
$_SESSION['password']='123456';

echo "Username".$_SESSION['username']."<br>";
echo "Password".$_SESSION['password']."<br>";


if(unset($_SESSION['username']))
{
echo "Session Variable Is UnSet";	
}
else
{
echo "Session Variable Is  Set Still";		
}


unset($_SESSION['username']);
unset($_SESSION['password']);

session_destroy();
?>  