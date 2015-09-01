
KH<?php

/*
|--------------------------------------------------------------------------
| Step over, Step into and Step out
|--------------------------------------------------------------------------
| 1. Step over – Step over the currently executing line
| 2. Step into – Step into the function (for non-built-in functions)
| 3. Step out – Step out of the current function
*/

function abletodrive($age){

    return $age>=16;
}

function notifydriver($name, $age){

    $msg = abletodrive($age) ? 'you may drive' : 'you may not drive'; // After coming here if you press again "Step into" 
                                                                      // then it will go to function abletodrive() definition but
                                                                      // if you press "Step over" or "Step out" it will goto next line

    return "$name: $msg";
}

notifydriver("Moin", 15); // Add Break point here and then strat debugging(xdebug) with launch browser

// Now if you press "Step into" then it will goto function notifydriver() definition 
// but if you press "Step over" or "Step out" it will goto next line

/*
|--------------------------------------------------------------------------
| watch exression
|--------------------------------------------------------------------------
| 1. You also can add watch exression to watch the particular variable value. To set it right click on editor
| 2. Then select set watch expression then type any varible name used in you code i.e "$age" or "$msg" simply type 
| 3. these var name then you can see the value of that var.
*/

?>
