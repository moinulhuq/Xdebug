<?php

function a($param){
	debug_zval_dump($param); echo "<br>";		
	
	$val = 'beta';	
	b($val);	
}

function b($param){
	debug_zval_dump($param); echo "<br>";		

	$val = 'delta';	
	c($val);	
}

function c($param){
	debug_zval_dump($param);		
}

$val = 'alpha';
a($val);

/*ouptut*
string(5) "alpha" refcount(4)
string(4) "beta" refcount(4)
string(5) "delta" refcount(4) 
*ouptut*/

function a($param){
	xdebug_debug_zval('param');
	
	$val = 'beta';	
	b($val);	
}

function b(&$param){
	xdebug_debug_zval('param');

	$val = 'delta';	
	c($val);	
}

function c($param){
	xdebug_debug_zval('param');		
}

$val = 'alpha';
a($val);

/*ouptut*
param: (refcount=3, is_ref=0),string 'alpha' (length=5)
param: (refcount=3, is_ref=1),string 'beta' (length=4)
param: (refcount=3, is_ref=0),string 'delta' (length=5)
*ouptut*/


?>
