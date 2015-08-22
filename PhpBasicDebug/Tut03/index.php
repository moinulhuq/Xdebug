<?php

/*
|--------------------------------------------------------------------------
| Generates a user-level error/warning/notice message using trigger_error()
|--------------------------------------------------------------------------
| 1. trigger_error("STRING MSG", E_USER_ERROR);
| 2. trigger_error("STRING MSG", E_USER_WARNING);
| 3. trigger_error("STRING MSG", E_USER_NOTICE);
| 
*/

Class Myclass{

public $dividend;
public $divisor;
public $Quotient;

	public function __construct($dividend, $divisor){
		$this->dividend = $dividend;
		$this->divisor = $divisor;
	}

	public function clac(){

		if ($this->divisor == 0) {
			trigger_error("Divisor can not be zero", E_USER_ERROR);
		}
		elseif ($this->dividend<$this->divisor) {
			trigger_error("Dividend is less than Divisor", E_USER_WARNING);
		}
		elseif ($this->dividend == $this->divisor) {
			trigger_error("Dividend is equal to Divisor", E_USER_NOTICE);
		}

		echo $this->Quotient = ($this->dividend/$this->divisor);
	}

}

$objMyclass = new Myclass(2,0);

$objMyclass->clac();

?>
