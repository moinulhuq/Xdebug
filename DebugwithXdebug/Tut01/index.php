<?php
/*
|--------------------------------------------------------------------------
| xdebug installation on xampp
|--------------------------------------------------------------------------
| 1. Find 'php.ini' config file, usually it remain in 'C:\xampp\php\php.ini'
| 2. search for 'XDebug' keyword and uncomment these lines removing ';'
|
| 		[XDebug]
|		zend_extension = "C:\xampp\php\ext\php_xdebug.dll"
|		xdebug.profiler_append = 0
|		xdebug.profiler_enable = 1
|		xdebug.profiler_enable_trigger = 0
|		xdebug.profiler_output_dir = "C:\xampp\tmp"
|		xdebug.profiler_output_name = "cachegrind.out.%t-%s"
|		xdebug.remote_enable = 0
|		xdebug.remote_handler = "dbgp"
|		xdebug.remote_host = "127.0.0.1"
|		xdebug.trace_output_dir = "C:\xampp\tmp"		
|
| 3. Now run this below code and if the error is not showing 'Call Stack' then something worng happen 		
|    and need to check it again to install xdebug on xampp.
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

array (size=3)
  0 => 
    array (size=4)
      'file' => string 'C:\xampp\htdocs\prac\index.php' (length=30)
      'line' => int 33
      'function' => string 'c' (length=1)
      'args' => 
        array (size=1)
          0 => &string 'delta' (length=5)
  1 => 
    array (size=4)
      'file' => string 'C:\xampp\htdocs\prac\index.php' (length=30)
      'line' => int 30
      'function' => string 'b' (length=1)
      'args' => 
        array (size=1)
          0 => &string 'beta' (length=4)
  2 => 
    array (size=4)
      'file' => string 'C:\xampp\htdocs\prac\index.php' (length=30)
      'line' => int 39
      'function' => string 'a' (length=1)
      'args' => 
        array (size=1)
          0 => &string 'alpha' (length=5)


( ! ) Fatal error: Call to undefined function does_not_exists() in C:\xampp\htdocs\prac\index.php on line 37
Call Stack
#	Time	Memory	Function	Location
1	0.0100	133600	{main}( )	..\index.php:0
2	0.0100	133888	a( )	..\index.php:39
3	0.0100	133960	b( )	..\index.php:30
4	0.0100	134032	c( )	..\index.php:33
Error: 1 Call to undefined function does_not_exists()

array (size=1)
  0 => 
    array (size=2)
      'function' => string 'customError' (length=11)
      'args' => 
        array (size=0)
          empty

*****OutPutEnd**/

?>
