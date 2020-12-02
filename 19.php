<?php

class Father
{
public static $a=20;
public static function result()
{
echo "Total".Son::display();
echo "</br>";	
}	
}

class Son extends Father
{
function display()
{
echo "The Result is:".Father::$a;	
echo "</br>";	
echo "The Result is:".Father::result();
echo "</br>";	
}	
}
 
$object=new Son;
$object->display();
$object->result();
 
?>