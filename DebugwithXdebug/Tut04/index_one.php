<?php

class A {
    public $a=0;
    public function __construct($x){

    	$this->a = $x;
    }
} 
class B extends A {
    public $b=0;
    public function __construct(){
    	$this->b = $this->a;
    }
}
class C extends B {
    public $c=0;
    public function __construct(){

    	$this->c = 20;
    }
} 
 
$ObjA = new A(10);
$ObjB = new B(); 
$ObjC = new C(); 

/*window*

$lastObj = C[3]
	$lastObj->c = (int) 20
	$lastObj->b = (int) 0
	$lastObj->a = (int) 0
$someObj = A[1]
	$someObj->a = (int) 10
$someOtherObj = B[2]
	$someOtherObj->b = (int) 0
	$someOtherObj->a = (int) 0

*window*/


?>
