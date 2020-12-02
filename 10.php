
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
 		 function __construct($x,$y)
 		 {
 		  parent::__construct($x);	
          $this->b=$y;
          echo "Second Value is Constructed".$this->b; 
          echo "</br>";     
 		 }
 } 


 $object=new Son(10,20);
 


?>