<?php

/*
|--------------------------------------------------------------------------
| Custom Error Handling - Method 04 (Exception Handling)
|--------------------------------------------------------------------------
| Creating a Custom Exception Class
|
*/

class customException extends Exception {
 
  public function errorMessage() { 
    $errorMsg = '<b>Error</b> on line '.$this->getLine().' in '.$this->getFile().' '.$this->getMessage();
    return $errorMsg;
  }

}

$email = "someone@example...com";

try {

  if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
    throw new customException("Not a valid email");
  }

} catch (customException $e) {

  echo $e->errorMessage();

}


?>
