<?php

class Father{

	public $name;

	public function disp($name)
	{
		$this->name=$name;
		echo"The Father is :$this->name <br>";
	}

}

class Son extends Father{

	public function disp($name)
	{
		$this->name=$name;
		echo"The Son is :$this->name <br>";
	}

}

$object=new Father;
$object->disp("Mohsin");
$obj=new Son;
$obj->disp("Mohi");

?>