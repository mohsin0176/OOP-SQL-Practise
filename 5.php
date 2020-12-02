
 
<?php
class mobile
{

public $model;

function showmodel()
{
	
	echo"Model Number:$this->model";
	echo "</br>";
}
	
}

$object=new mobile();
$object->model="G25";
$object->showmodel();



?>