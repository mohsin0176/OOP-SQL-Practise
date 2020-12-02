<?php
namespace Product\India;
use Godown\Bangladesh;
use Godown\Bangladesh\Laptop as Computer;

class Laptop
{
	function display(){echo "It is First Class";}
}



$obj=new Godown\Bangladesh\Laptop;
$obj->display();
$object=new Computer();
$object->display();
?>