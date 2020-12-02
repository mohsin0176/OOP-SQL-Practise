<?php

class father
{

public static $a=10;
public function display()
{
echo self::$a;	
}

}

$object=new Father;
$object->display();
?>