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

checkNum(2); //trigger exception

/* Fatal error: Uncaught exception 'Exception' with message 'Value must be 1 or below' in    C:\xampp\htdocs\prac\index.php:17 
   Stack trace: #0 C:\xampp\htdocs\prac\index.php(24): checkNum(2) #1 {main} thrown in C:\xampp\htdocs\prac\index.php on line 17
*/

?>
