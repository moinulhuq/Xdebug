<?php

/*
|--------------------------------------------------------------------------
| Custom Error Handling - Method 04 (Exception Handling)
|--------------------------------------------------------------------------
| 1. Exception change the normal flow of program execution
| 2. In PHP Exceptions are thrown and caught
| 3. To catch an Exception surrownd you code in "try" block
| 4. If Exception is thrown and not caught then PHP fatal Error occured
*/

function checkNum($number) { //create function with an exception

  if($number>1) {
    throw new Exception("Value must be 1 or below");
  }

  return true;
}

try { //trigger exception in a "try" block

  checkNum(2); 

}catch(Exception $e) { //catch exception

  echo 'Message: ' .$e->getMessage();

}

/* Message: Value must be 1 or below */

?>
