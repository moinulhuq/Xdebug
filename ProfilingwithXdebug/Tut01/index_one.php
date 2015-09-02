<?php

/*
|--------------------------------------------------------------------------
| Profiling - What profiler do?
|--------------------------------------------------------------------------
| -> Actually profiler analyze program execution to measure
|   - memory
|   - duration
|   - frequency of function calls
| 
| -> profiler generates files('cachegrind.out.1441078621-C__xampp_htdocs_xdb_index_php') for external analysis (cache grind)
| 
| -> in 'php.ini'  
|                 this line 'xdebug.profiler_enable = 1' means always cache every single page in 'C:\xampp\tmp' directory
|                 But this line 'xdebug.profiler_enable_trigger = 1' means pass this (XDEBUG_PROFILE=1) parameter with the url
|                 And it will cache that specific page for analyze.
| 
|                 e.g "http://localhost/xdb/index.php?XDEBUG_PROFILE=1" 
|
|  which means it will cache 'index.php' in 'C:\xampp\tmp' directory for analyze.
| 
*/

for($i=0;$i<50;$i++){
    slow();
}

slower();

function slow(){
    for($i=0;$i<100000;$i++){}
}

function slower(){
    usleep(50000);
}

/*
|--------------------------------------------------------------------------
| Output page description
|--------------------------------------------------------------------------
| The basic output lists all the different functions, methods, and included/required files
|
| What the different colours mean?
|   -> Blue - PHP internal functions
|   -> Green - your class methods
|   -> Orange - your custom functions
|   -> Grey - Time taken for include or require files.
|
| What the coloured bar means? Graphical display of breakdown of time for each type as above.
|
| -> Invocation Count: Number of times the function has been called
|
| -> Total Self Cost: Total time take to execute this function (time taken to execute your other custom functions is excluded.)
|
| -> Total Inclusive Cost: Total time, including any other functions called (PHP internal, or your functions)
|
| Assumed that you've clicked the arrow to open a particular function?
| 
| -> Calls: The functions called for executing this function
| -> Called From : From where does it call.
| -> Count: Number of times the parent calls the child. 
| -> Total Call Cost: The total time executing this function, when called from the parent function
|   
*/

/*
|--------------------------------------------------------------------------
| Note
|--------------------------------------------------------------------------
| If any function invoked a lot and their 'sefl cost == inclusive cost' then this function is good candidate 
| for optimization.
*/
?>
