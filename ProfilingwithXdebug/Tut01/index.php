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
