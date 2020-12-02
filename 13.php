<?php

class Father
{
public $a=30;
}

/**
 * 
 */
class Son extends Father
{
	
	public function displayChild()
	{
		echo $this->a;
	}
}


$object=new Son;
$object->displayChild();
?>
