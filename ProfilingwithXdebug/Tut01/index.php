<?php
/*
|--------------------------------------------------------------------------
| Profiling
|--------------------------------------------------------------------------
| 1. Profiling used for Benchmarking of your code
| 2. To enable profiling uncomment these lines from 'php.ini'
|
| xdebug.profiler_append = 0
| xdebug.profiler_enable = 0
| xdebug.profiler_enable_trigger = 1
| xdebug.profiler_output_dir = "C:\xampp\tmp"
| xdebug.profiler_output_name = "cachegrind.out.%t-%s"
| 
| 3. Right after that goto this link "https://github.com/jokkedk/webgrind" and download "webgrind"
| 4. Extract "webgrind-master.zip" it to your working root directory, for mine it is 'xdb/webgrind'
| 5. Write this below code and run this code with this parameter "index.php?XDEBUG_PROFILE=1"
|
|       it will look like "http://localhost/xdb/index.php?XDEBUG_PROFILE=1" 
| 
| 6. After that write this url to see result in 'webgrind'. 
|       
|       http://localhost/xdb/webgrind/
|
| 7. Once load 'webgrind' page, select "Show->100%" of auto (newest) in microsecond and then press update button
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

?>

/*
|--------------------------------------------------------------------------
| Output page description
|--------------------------------------------------------------------------
| The basic output lists all the different functions, methods, and included/required files
| -> Invocation Count: The number of times the function has been called
| -> Total Self Cost: The total time it took to execute the raw php in this function 
|    (time taken to execute your other custom functions is excluded.)
| -> Total Inclusive Cost: Total time, including any other functions called (PHP internal, or your functions)
| 
| What the different colours mean?
|   Blue are PHP internal functions
|   Green are your class methods
|   Orange are procedural functions
|   Grey is time taken to include, or require .php files.
|
| What the coloured bar means? Graphical display of breakdown of time for each type as above.
| 
| For the last ones, I assume you've clicked the arrow to open a particular function?
|   Calls: The functions/methods called in executing this function      
|
| Total Call Cost: The total time executing this function, when called from the parent function
|   Count: Number of times the parent calls the child.
*/
