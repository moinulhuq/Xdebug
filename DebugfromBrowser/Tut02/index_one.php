<?php
/*
|--------------------------------------------------------------------------
| PHP_DEBUG
|--------------------------------------------------------------------------
*/

global $PHP_Debug;

// For Printing the string or any kind of msg
$PHP_Debug->add("Simple String print"); 
$PHP_Debug->add("Simple String print", "Info"); 

// For Printing the simple value
$val = 20;
$PHP_Debug->add($val); 

// For Printing array
$arr = array("a"=>1, "b"=>2, "c"=>"cat");
$PHP_Debug->dump($arr); 

function a($arg) {
    b($arg);
}

function b(&$arg) {
    d('delta');
}

function d($arg) {
    $declared = 'variable';    
    trigger_error('Custom notice', E_USER_NOTICE);
    trigger_error('Custom warning', E_USER_WARNING);
    trigger_error('Custom error', E_USER_ERROR);
}

a('alpha');

//FirePHP could use as PHP Profiling Tool
$debug_line = $PHP_Debug->add("Profiling with PHP_Debug"); 
$debug_line->setStartTime();
a('alpha');
$debug_line->setEndTime();

?>
