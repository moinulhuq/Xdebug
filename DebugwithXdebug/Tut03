<?php
/*
|--------------------------------------------------------------------------
| Display all the declared variable
|--------------------------------------------------------------------------
| 1. Need extra configaration change
| 2. In php.ini file after 'xdebug.trace_output_dir = "C:\xampp\tmp"' this line add these lines 
|
|	xdebug.collect_vars = 1
|	xdebug.show_local_vars = 1
|	xdebug.collect_params = 4
|
| 3. restrat apache
*/

function a($param){
	var_dump(xdebug_get_declared_vars());
	
	$val = 'beta';	
	b($val);	
}
function b(&$param){
	var_dump(xdebug_get_declared_vars());

	$val = 'delta';	
	c($val);	
}
function c($param){

	var_dump(xdebug_get_declared_vars());
}

$val = 'alpha';
a($val);


/*ouptut*

array (size=2)
  0 => string 'param' (length=5)
  1 => string 'val' (length=3)

array (size=2)
  0 => string 'param' (length=5)
  1 => string 'val' (length=3)

array (size=1)
  0 => string 'param' (length=5)

*ouptut*/


?>
