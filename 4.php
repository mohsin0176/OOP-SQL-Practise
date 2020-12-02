
<?php
class mobile
{

public $model;

function showmodel($number)
{
	$this->model=$number;

	echo"Model Number:$this->model";
	echo "</br>";
}
	
}

$object=new mobile();
$object->showmodel(123);

$obj=new mobile;
$obj->showmodel('A28');

?>