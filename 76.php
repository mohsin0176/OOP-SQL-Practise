<?php

$a=8;

try
{
if($a>=10)
{
echo $a;	
}
else
{
throw new Exception("Entered Value is Greater Than 5<br>");
		
}	
}
catch(Exception $e)
{
echo $e->getMessage();
}

finally
{
echo "Finally Block";	
}

?>