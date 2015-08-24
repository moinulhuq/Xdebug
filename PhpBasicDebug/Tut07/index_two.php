<?php

/*
|--------------------------------------------------------------------------
| Custom Error Handling - Method 04 (Exception Handling)
|--------------------------------------------------------------------------
| Multiple Exceptions
|
*/

$email = "someone@example.com";

try {
  //check if
  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    //throw exception if email is not valid
    throw new customException($email);
  }
  //check for "example" in mail address
  if(strpos($email, "example") !== FALSE) {
    throw new Exception("$email is an example e-mail");
  }
}

catch (Exception $e) {
  echo $e->getMessage();
}

catch(Exception $e) {
  echo $e->getMessage();
}


?>
