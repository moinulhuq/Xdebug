<?php

/*
|--------------------------------------------------------------------------
| Custom Error Handling - Method 03
|--------------------------------------------------------------------------
| Custom error/warning/notice message using register_shutdown_function and error_get_last()
|--------------------------------------------------------------------------
| 1. E_USER_WARNING occurs and print value "Warning: Value nust be 1 0r below with customError() message
| 2. E_USER_NOTICE occurs and print value "Notice: Value is equal" with customError() message
| 3. E_USER_ERROR occurs and print value of customError() function with customError() message
| 
*/

register_shutdown_function('customError');

function customError() {
  $error = error_get_last();
  echo "<b>Error:</b> ".$error['type']." ".$error['message']."<br>";
}

$test=1; // Here you can set value

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
| register_shutdown_function() can handle E_ERROR, E_PARSE, E_CORE_ERROR, 
| E_CORE_WARNING, E_COMPILE_ERROR, E_COMPILE_WARNING, and most of E_STRICT
| 
*/

// E_ERROR - set_error_handler() can not handle and system crash
does_not_exists(); //Fatal error: Call to undefined function does_not_exists()

?>
