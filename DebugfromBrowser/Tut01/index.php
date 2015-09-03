<?php
/*
|--------------------------------------------------------------------------
| FirePHP with FireBug (Mozilla)
|--------------------------------------------------------------------------
| -> Download "FireBug" from this link https://getfirebug.com/downloads/ and install with mozilla
| 
| -> Then download "FirePHP" from this https://addons.mozilla.org/en-us/firefox/addon/firephp/ and install with mozilla
| 
| -> Press 'ctrl+alt+c' to open up "FireBug window" below mozilla firefox
|
| -> From that window Enable -> console and Net tab
|
| -> Next Copy and paste this code to test whether it is working or not
|
| -> Check in your console window for output
*/

require_once "FirePHPCore/FirePHP.class.php";
ob_start();

$FirePHP = FirePHP::getInstance(TRUE); // It is an singleton instance

// To Enable or Disable FirePHP
$FirePHP->setEnabled(TRUE); // by deault it is enable do not need to write
$FirePHP->setEnabled(FALSE); // but if you want to disable it then write

// For Printing the string or any kind of msg
$FirePHP->log("Simple String print"); 
$FirePHP->log("Simple String print", "Info"); 

// For Printing the simple value
$val = 20;
$FirePHP->log($val); 

// For Printing array
$arr = array("a"=>1, "b"=>2, "c"=>"cat");
$FirePHP->log($arr); 
$FirePHP->log($arr, "value of arr"); 

//FirePHP support three custom error level
$FirePHP->info("Triggered Notice");
$FirePHP->warn("Triggered Warning");
$FirePHP->error("Triggered Error");

//FirePHP support Stack trace
function a($param){
    b('beta');  
}
function b($param){
    c('delta'); 
}
function c($param){    
    $FirePHP = FirePHP::getInstance(TRUE);
    $FirePHP->trace("Tracing");    
}
a('alpha');

//FirePHP could use as PHP Profiling Tool
$requestStart = microtime();
a('alpha');
$requestEnd = microtime(); 
  
$executionTime = $requestEnd - $requestStart; 
$FirePHP->info($executionTime, 'This request took (seconds)'); 


?>
