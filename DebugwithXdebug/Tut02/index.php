<?php
/*
|--------------------------------------------------------------------------
| xdebug_debug_zval - Example 01
|--------------------------------------------------------------------------
| 1. PHP variable is stored in "zval" container.
| 2. "zval" container contains variable type, value and two additional bits of information.
| 3. The first one is called "is_ref" contain boolean value and another one is called "refcount".
| 4. "refcount" contains how many variable names (also called symbols) point to this one zval container.
| 5. A "zval" container is created when a new variable is created with a constant value, such as:
|
|		$a = "new string";
|
|    In this case new symbol name is 'a' with the type 'string' and value 'new string'. 
|    The "is_ref" bit is by default set to FALSE and "refcount" is set to 1 as there is only one symbol ('a') 
|    that makes use of this variable container. 
|    Note:- that if "refcount" is 1, "is_ref" is always FALSE.
*/

 $a = "new string";
 xdebug_debug_zval('a');

/*
|	 ouptut: a: (refcount=1, is_ref=0),string 'new string' (length=10) 
|    In this case new symbol name is 'a' with the type 'string' and value 'new string'. 
|    The "is_ref" bit is by default set to FALSE and "refcount" is set to 1 as there is only one symbol ('a') 
|    that makes use of this variable container. 
|    Note:- that if "refcount" is 1, "is_ref" is always FALSE.
*/

/*
|--------------------------------------------------------------------------
| xdebug_debug_zval - Example 02
|--------------------------------------------------------------------------
| 1. Assigning this variable to another variable name will increase the refcount. 
*/

$a = "new string";
$b = $a;
xdebug_debug_zval( 'a' );

/*
|	 ouptut: a: (refcount=2, is_ref=0),string 'new string' (length=10)
|    'refcount' value is 2 because same variable is linked with both a and b.
|    Note:- Variable containers get destroyed when the "refcount" reaches zero.
*/

/*
|--------------------------------------------------------------------------
| xdebug_debug_zval - Example 03
|--------------------------------------------------------------------------
| 1. "refcount" gets decreased by one when any symbol linked variable is unset().
*/

$a = "new string";
$c = $b = $a;
xdebug_debug_zval( 'a' );
unset( $b, $c );
xdebug_debug_zval( 'a' );

/*
|	 ouptut: a: (refcount=2, is_ref=0),string 'new string' (length=10)
|    'refcount' value is 2 because same variable is linked with both a and b.
|    Note:- Variable containers get destroyed when the "refcount" reaches zero.
*/


?>
