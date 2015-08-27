<?php
/*
|--------------------------------------------------------------------------
| xdebug_debug_zval - Example 04
|--------------------------------------------------------------------------
| three zval containers are: 'a', 'meaning', and 'number'
*/

$a = array( 'meaning' => 'life', 'number' => 42 );
xdebug_debug_zval( 'a' );

/*Output*
|	 a:
|	 (refcount=1, is_ref=0),
|	 array (size=2)
|	   'meaning' => (refcount=1, is_ref=0),string 'life' (length=4)
|	   'number' => (refcount=1, is_ref=0),int 42
*/

/*
|--------------------------------------------------------------------------
| xdebug_debug_zval - Example 05
|--------------------------------------------------------------------------
*/

$a = array( 'meaning' => 'life', 'number' => 42 );
$a['life'] = $a['meaning'];
xdebug_debug_zval( 'a' );

/*Output*
|	 a:
|	 (refcount=1, is_ref=0),
|	 array (size=3)
|	   'meaning' => (refcount=2, is_ref=0),string 'life' (length=4)
|	   'number' => (refcount=1, is_ref=0),int 42
|	   'life' => (refcount=2, is_ref=0),string 'life' (length=4)
*/

/*
|--------------------------------------------------------------------------
| xdebug_debug_zval - Example 06
|--------------------------------------------------------------------------
*/

$a = array( 'meaning' => 'life', 'number' => 42 );
$a['life'] = $a['meaning'];
unset( $a['meaning'], $a['number'] );
xdebug_debug_zval( 'a' );

/*Output*
|	 a:
|	 (refcount=1, is_ref=0),
|	 array (size=1)
|	   'life' => (refcount=1, is_ref=0),string 'life' (length=4)
*/



?>
