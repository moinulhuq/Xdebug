<?php

/*
|--------------------------------------------------------------------------
| Custom Error Handling - Method 04 (Exception Handling)
|--------------------------------------------------------------------------
| Re-throwing Exceptions
|
*/

$email = "someone@example.com";

try {

	  try {

	    if(strpos($email, "example") !== FALSE) {
	      throw new Exception($email);
	    }

	  } catch(Exception $e) {

	    throw new Exception($email);
	  }

}catch (Exception $e) {

  echo $e->errorMessage();
}


?>
