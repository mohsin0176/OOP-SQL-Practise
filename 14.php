<?php

class Father
{
protected $a;
public function display()
{
echo "The Value Of A is:".$this->a;	
}
}

 

$object=new Father;
$object->a=30;

?>
