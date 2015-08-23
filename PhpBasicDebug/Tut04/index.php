<?php
/*
|--------------------------------------------------------------------------
| Custom Error Handling - Method 02
|--------------------------------------------------------------------------
| Custom error/warning/notice message using set_error_handler() and trigger_error()
|--------------------------------------------------------------------------
| 1. E_USER_WARNING occurs if the "test" variable is bigger than "1" and print value "Warning: Value nust be 1 0r below 
| 2. E_USER_NOTICE occurs if the "test" variable is equal to "1" and print value "Notice: Value is equal"
| 3. E_USER_ERROR occurs if the "test" variable is less than "1" and print value of customError() function
| 
*/
set_error_handler("customError",E_USER_ERROR);

function customError($errno, $errstr) {
  echo "<b>Error:</b> $errno $errstr<br>";
}

$test=0; // Here you can set value
if ($test>1) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}
elseif ($test==1) {
  trigger_error("Value is equal",E_USER_NOTICE);
}
elseif ($test<1) {
  trigger_error("Value is less than expected",E_USER_ERROR);
}

/*
|--------------------------------------------------------------------------
| Notice
|--------------------------------------------------------------------------
| set_error_handler() cannot handle E_ERROR, E_PARSE, E_CORE_ERROR, 
| E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING, and most of E_STRICT
| 
*/

// E_ERROR - set_error_handler() can not handle and system crash
does_not_exists(); //Fatal error: Call to undefined function does_not_exists()

?>
