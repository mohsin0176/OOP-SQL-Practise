<?php

abstract class Father{
	function disp()
	{
		echo "Mormal Method";
	}

	abstract function absmethod();
}

class Son extends Father
{
	function absmethod()
	{
	echo "Absract Method";
	
	}
}

$object=new Son;
$object->absmethod();
?>