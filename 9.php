
<?php

 
 
 class Father
 {
 	
 
 		 public $a;
 		 function __construct($x)
 		 {
          $this->a=$x;
          echo "First Value is Constructed".$this->a;    
          echo "</br>"; 
 		 }
 	
 }

 class Son extends Father
 {
 	
 	public $b;
 		 function __construct($y)
 		 {
          $this->b=$y;
          echo "Second Value is Constructed".$this->b; 
          echo "</br>";     
 		 }
 } 


 $object=new Son(10);
 $object=new Son(20);
 $obj=new Father(30);


?>