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

require_once "FirePHPCore/fb.php";
ob_start();


//$FirePHP = FirePHP::getInstance(TRUE); // if you use require_once "FirePHPCore/FirePHP.class.php";

// To Enable or Disable FirePHP
FB::setEnabled(FALSE); // but if you want to disable it then write
FB::setEnabled(TRUE); // by deault it is enable do not need to write


// For Printing the string or any kind of msg
FB::log("Simple String print"); 
FB::log("Simple String print", "Info"); 


// For Printing the simple value
$val = 20;
FB::log($val); 


// For Printing array
$arr = array("a"=>1, "b"=>2, "c"=>"cat");

FB::log($arr); 
FB::log($arr, "value of arr"); 

FB::send($arr, FirePHP::WARN); // FirePHP::INFO, FirePHP::ERROR
FB::send($arr, 'An array with an Error type', FirePHP::ERROR);

//FirePHP support three custom error level
FB::info("Triggered Notice");
FB::warn("Triggered Warning");
FB::error("Triggered Error");


//FirePHP support Stack trace
function a($param){
    b('beta');  
}
function b($param){
    c('delta'); 
}
function c($param){    
    
    FB::trace("Tracing");    
}
a('alpha');


//FirePHP could use as PHP Profiling Tool
$requestStart = microtime();
a('alpha');
$requestEnd = microtime(); 
  
$executionTime = $requestEnd - $requestStart; 
FB::info($executionTime, 'This request took (seconds)'); 

//FirePHP support grouping msg
$arr = array("a"=>1, "b"=>2, "c"=>"cat", "d"=>"dog");

FB::group('Grouping Integer');
foreach($arr as $a){
    if(intval($a)!=0)
        FB::log($a);
}
FB::groupEnd();


//FirePHP support Table display
$specialHashes = array();
for ($x = 0; $x < 5; $x++) {
    $specialHashes[] = array($x, sha1($x . 'somesalt'));
}

$headers = array('Hash #', 'Hash Value');
$logTable = array($headers) + $specialHashes;
FB::table("Special Hashes", $logTable)


/*
|--------------------------------------------------------------------------
| For HELP - FIREPHP Documentation
|--------------------------------------------------------------------------
| https://github.com/firephp/firephp/blob/master/docs/API/FirePHP.md
*/


?>
