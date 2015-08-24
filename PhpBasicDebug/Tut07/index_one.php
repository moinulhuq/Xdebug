<?php

/*
|--------------------------------------------------------------------------
| Custom Error Handling - Method 04 (Exception Handling)
|--------------------------------------------------------------------------
| 1. Try, throw and catch
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
