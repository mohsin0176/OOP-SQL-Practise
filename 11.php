<?php

class Father{

	public $a;

	public function displayParent()
	{
        echo " The Value Of This Function:".$this->a;
	}

}

/**
 * 
 */
class Son extends Father
{
	
    
	public function displayChild($x)
	{
		$this->a=$x;
		$this->displayParent();

	}
 
}

$object=new Son;
$object->displayChild(10);

?>
