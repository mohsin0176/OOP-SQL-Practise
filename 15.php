<?php

class Father
{
protected $a=30;
}

class Son extends Father
{
protected $b=20;
}

class GarndSon extends Son
{
public function displayGrandSon()
{
   echo $this->a."AND".$this->b;
}
}

$object=new GarndSon;
$object->displayGrandSon();

?>