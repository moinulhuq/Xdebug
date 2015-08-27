<?php
/*
|--------------------------------------------------------------------------
| debug_zval_dump - Example 01
|--------------------------------------------------------------------------
*/

$var1 = 'Hello World';
debug_zval_dump($var1);

/*Output*
|	 string(11) "Hello World" refcount(2) 
*/

/*
|--------------------------------------------------------------------------
| debug_zval_dump - Example 02
|--------------------------------------------------------------------------
| Why refcount(1)? Because a copy of $var1 is being made, when the function is called. 
*/

$var1 = 'Hello World';
$var2 = '';

$var2 =& $var1;

debug_zval_dump($var1); // not passed by reference, this time

/*Output*
|	 string(11) "Hello World" refcount(1) 
*/



?>
