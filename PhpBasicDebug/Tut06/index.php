<?php

/*
|--------------------------------------------------------------------------
| For debugging - debug_backtrace() function
|--------------------------------------------------------------------------
| 1. It displays data that led up to the debug_backtrace() function
| 2. It returns associative arrays with function, line, file, class, object, type and args
*/

function a($param){
	b('beta');	
}
function b($param){
	c('delta');	
}
function c($param){
	var_dump(debug_backtrace());
}

a('alpha');

?>
