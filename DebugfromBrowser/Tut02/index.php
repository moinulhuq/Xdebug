<?php

/*
|--------------------------------------------------------------------------
| PHP_DEBUG how to install from standalone
|--------------------------------------------------------------------------
| -> Download "PHP_DEBUG" from this link http://download.pear.php.net/package/PHP_Debug-1.0.3.tgz
| 
| -> Then extract "PHP_Debug-1.0.3.tgz" to your working Directory root, for mine "\htdocs\xdb\" and name folder as "PHP_Debug"
| 
| -> After that in your "PHP_Debug" folder goto "PHP_Debug_ShowSource.php" page and find "ALLOWED_PATH" and assign your working
|    Directory root i.e 
|
|   $view_source_options = array(
|           'PEAR_ROOT' => 'C:\xampp\php\pear',
|           'CSS_ROOT' => 'css',
|           'ALLOWED_PATH' => array('C:\xampp\htdocs\xdb\\')   // edit here
|       );
|
| -> Then create a page like "Main.php" in your working root directory and where you can include your intended page to debug.
|
| -> And finally call this "Main.php" page.
*/

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

a("alpha");

echo "<h1> All errors are hiding as you use 'PHP_Debug' including include('lib.inc.php'); </h1>"

?>
