<?php

$cookie_name='user_email';
if(isset($_REQUEST['set']))
{
$cookie_value=$_REQUEST['email'];
$cookie_expire=time()+60*60*24*10;
setcookie($cookie_name,$cookie_value,$cookie_expire);	
}


if(isset($_COOKIE[$cookie_name]))
{
	echo "Cookie Name Is:".$cookie_name."And Value Is:".$_COOKIE[$cookie_name]."<br>";
}

else
{
echo "Cookie Is Not Set";	
}

?>