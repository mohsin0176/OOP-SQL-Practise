<?php

class Popy
{

}
interface Father
{

}

interface Mother
{

}
interface Uncle
{

}
interface Son extends Father
{

}
interface GrandSon extends Mother,Father
{

}

class Pop implements Father
{

}
class Top implements Father,Mother
{
	
}
class Cop extends Popy implements Mother,Uncle
{
	
}
class Rop extends Mother,Uncle implements Father  
{
	
}
?>