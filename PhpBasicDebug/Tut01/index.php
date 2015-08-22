<?php

/*
|--------------------------------------------------------------------------
| PHP has 16 errors reporting levels
|--------------------------------------------------------------------------
| Each level has constant name integer value. Declaring common error reporting levels below
+--------+--------------+------------------------------------------------------------------------------------------+
| Value  | Constant     | Description                                                                              |
+--------+--------------+------------------------------------------------------------------------------------------+
| 1      | E_ERROR      | Fatal run-time errors (crash)                                                            |
| 2      | E_WARNING    | Run-time warnings, dose not halt                                                         |
| 4      | E_PARSE      | Compile-time errors, dose not execute                                                    |
| 8      | E_NOTICE     | Run-time notices, dose not halt but there is something wrong                             |
| 2048   | E_STRICT     | Compile-time notice, dose not halt but reinforces forward compatibilty and best practice |
| 8192   | E_DEPRECATED | Run-time notice, dose not halt but will not work in future PHP versions                  |
| 32767  | E_ALL        | All errors, warnings and notices, except E_STRICT                                        |
+--------+--------------+------------------------------------------------------------------------------------------+
*/

error_reporting(E_ALL|E_STRICT|E_DEPRECATED);
ini_set('display_errors', 1);

// E_ERROR - Call to undefined function
does_not_exists(); //Fatal error: Call to undefined function does_not_exists()

// E_WARNING - failed to open stream: No such file or directory
fopen('does.not.exists.txt', 'r');  //Warning: fopen(does.not.exists.txt): failed to open stream: No such file or directory

// E_PARSE - syntax error, unexpected end of file
function my_func() {  //Parse error: syntax error, unexpected end of file

// E_NOTICE - Undefined variable: not_defined_var
print $not_defined_var;  //Notice: Undefined variable: not_defined_var

// E_STRICT
class Myclass{	
	public static $staticX=1;
}
$ObjMyclass = new Myclass();
$ObjMyclass->$staticX;  //Notice: Undefined variable: staticX in C:\xampp\htdocs\prac\index.php on line 186
			//Fatal error: Cannot access empty property in C:\xampp\htdocs\prac\index.php on line 186

//E_DEPRECATED - Function split() is deprecated
var_dump(split(',', 'one,two,three')); // Deprecated: Function split() is deprecated

?>
