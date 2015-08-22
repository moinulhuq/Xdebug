<?php
/*
|--------------------------------------------------------------------------
| Custom error/warning/notice message using set_error_handler() and trigger_error()
|--------------------------------------------------------------------------
| 1. E_USER_WARNING occurs if the "test" variable is bigger than "1" and print value of customError() function
| 2. E_USER_NOTICE occurs if the "test" variable is equal to "1" and print value "Warning: Value is equal"
| 3. E_USER_ERROR occurs if the "test" variable is less than "1" and print value "Error: Value is less than expected"
| 
*/

function customError($errno, $errstr) {
  echo "<b>Error:</b> [$errno] $errstr<br>";
  echo "Ending Script";
  die();
}

set_error_handler("customError",E_USER_WARNING);

$test=2; // Here you can set value

if ($test>1) {
  trigger_error("Value must be 1 or below",E_USER_WARNING);
}
elseif ($test==1) {
  trigger_error("Value is equal",E_USER_NOTICE);
}
elseif ($test<1) {
  trigger_error("Value is less than expected",E_USER_ERROR);
}

?>
