<?php

/*
|--------------------------------------------------------------------------
| For debugging - debug_backtrace() function
|--------------------------------------------------------------------------
| 1. debug_backtrace() can not execute after fatal error
| 2. where as xdebug backtrace can execute after fatal error
| 
*/

register_shutdown_function('customError');

function customError() {
  $error = error_get_last();
  echo "<b>Error:</b> ".$error['type']." ".$error['message']."<br>";
  var_dump(debug_backtrace());
}

function a($param){
	b('beta');	
}
function b($param){
	c('delta');	
}
function c($param){
	var_dump(debug_backtrace());
	does_not_exists(); //Fatal error: Call to undefined function does_not_exists()
}

a('alpha');

/*****OutPut****

array(3) { [0]=> array(4) { ["file"]=> string(30) "C:\xampp\htdocs\prac\index.php" ["line"]=> int(23) ["function"]=> string(1) "c" ["args"]=> array(1) { [0]=> &string(5) "delta" } } [1]=> array(4) { ["file"]=> string(30) "C:\xampp\htdocs\prac\index.php" ["line"]=> int(20) ["function"]=> string(1) "b" ["args"]=> array(1) { [0]=> &string(4) "beta" } } [2]=> array(4) { ["file"]=> string(30) "C:\xampp\htdocs\prac\index.php" ["line"]=> int(30) ["function"]=> string(1) "a" ["args"]=> array(1) { [0]=> &string(5) "alpha" } } }

Fatal error: Call to undefined function does_not_exists() in C:\xampp\htdocs\prac\index.php on line 27

Error: 1 Call to undefined function does_not_exists()

array(1) { [0]=> array(2) { ["function"]=> string(11) "customError" ["args"]=> array(0) { } } } - Right here No value for fatal error

/*****OutPutEnd****
?>
