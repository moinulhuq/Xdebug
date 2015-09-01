<?php

/*
|--------------------------------------------------------------------------
| Conditional Breakpoint
|--------------------------------------------------------------------------
| 1. Using Conditional Breakpoint you can use condition to break
*/

function abletodrive($age){

    return $age>=16;
}

function notifydriver($name, $age){

    $msg = abletodrive($age) ? 'you may drive' : 'you may not drive'; // Add Conditional Breakpoint here and you will get cmd window
                                                                      // where you can add "$age == 15" which means at age 15 it will break
                                                                      // Now strat debugging(xdebug) with launch browser and "Step over" it
                                                                      // if age is 15 then it will break instantly
    return "$name: $msg";
}

notifydriver("Moin", 15); // Add Break point here and then strat debugging(xdebug) with launch browser

// Now if you press "Step into" then it will goto function notifydriver() definition 
// but if you press "Step over" or "Step out" it will goto next line


?>
