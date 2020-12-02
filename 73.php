<?php

if (isset($_REQUEST['submit'])) 
{
if (filter_has_var(INPUT_GET, 'name')) // INPUT_POST,INPUT_COOKIE,INPUT_SERVER,INPUT_ENV
{
echo "Name Found";
} 
else
{
echo "Name Not Found";	
}
}

?>