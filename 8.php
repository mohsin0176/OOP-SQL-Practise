<?php

 
class Father
{
	
public $a;
public $b;

function getvalue($x,$y)
{
$this->a=$x;
$this->b=$y;
}

}

class Son extends Father
{
public $sum;
public $c=30;

function add()
{
$this->sum=$this->a+$this->b+$this->c;
return $this->sum;
}

}

/**
 * 
 */
class GrandSon extends Son
{
	
function display( )
{
		 
echo "Value Of A is :$this->a";
echo "</br>";
echo "Value Of B is :$this->b"; 
echo "</br>";
echo "Value Of C is :$this->c";
echo "</br>";
echo "Value Of Total is :".$this->add(); 
}

}


$object = new GrandSon();
$object->getvalue(10,20);
$object->display();

?>
