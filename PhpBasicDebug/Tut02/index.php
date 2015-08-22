<?php

/*
|--------------------------------------------------------------------------
| There are four places where you can set and get error reporting for debug
|--------------------------------------------------------------------------
| 1. php.ini - PHP Configuration File
| 2. httpd.conf - Apache Server Configuration File
| 3. htaccess - Directory level Configuration File
| 4. php script file - In your php script file directly
*/

/*
|--------------------------------------------------------------------------
| set error reporting in php.ini
|--------------------------------------------------------------------------
|		php_value error_reporting E_ALL
|		php_value log_errors_max_len 0
|		php_flag display_startup_errors On
|		php_flag display_errors On
|		php_flag html_errors On
|		php_flag log_errors On
|		php_flag ignore_repeated_errors On
|		php_flag ignore_repeated_source On
|		php_flag report_memleaks On
|		php_flag track_errors On
|		php_value docref_root "/phpmanual/"
|		php_value docref_ext .html
|		php_value error_log "C:\xampp\php\logs\php_error_log"
*/

/*
|--------------------------------------------------------------------------
| set error reporting in httpd.conf
|--------------------------------------------------------------------------
| 1. Uncomment "httpd-vhosts.conf" in httpd.conf
|
| 2. Edit httpd-vhosts.conf
| 	 Uncomment - NameVirtualHost *:80
|	   Uncomment - <VirtualHost *:80>...</VirtualHost> block and rewrite it like below
|
|	<VirtualHost *:80>
|		ServerName localhost
|		DocumentRoot "C:\xampp\htdocs"
|		php_value error_reporting 32767
|		php_value log_errors_max_len 0
|		php_flag display_startup_errors On
|		php_flag display_errors On
|		php_flag html_errors On
|		php_flag log_errors On
|		php_flag ignore_repeated_errors On
|		php_flag ignore_repeated_source On
|		php_flag report_memleaks On
|		php_flag track_errors On
|		php_value docref_root "/phpmanual/"
|		php_value docref_ext .html
|		php_value error_log "C:\xampp\php\logs\php_error_log"
|	</VirtualHost>
|
| 3. Also require “AllowOverride Options” or “AllowOverride All” privileges
| 4. Restart server
*/

/*
|--------------------------------------------------------------------------
| set error reporting in .htaccess
|--------------------------------------------------------------------------
| 1. create .htaccess to any directory
| 2. copy and paste this code
| 
|		php_value error_reporting 32767
|		php_value log_errors_max_len 0
|		php_flag display_startup_errors On
|		php_flag display_errors On
|		php_flag html_errors On
|		php_flag log_errors On
|		php_flag ignore_repeated_errors On
|		php_flag ignore_repeated_source On
|		php_flag report_memleaks On
|		php_flag track_errors On
|		php_value docref_root "/phpmanual/"
|		php_value docref_ext .html
|		php_value error_log "C:\xampp\php\logs\php_error_log"
|
| 3. If 'AllowOverride Options' or 'AllowOverride All' is enabled for some 'Location', 'Directory' or 'VirtualHost' in 'httpd.conf' 
|    file then we can use
| 4. Restart server
*/

/*
|--------------------------------------------------------------------------
| set error reporting in PHP Script
|--------------------------------------------------------------------------
| 1. copy and paste this code
| 
|		error_reporting(E_ALL|E_STRICT);
|		ini_set('log_errors_max_len', 0);
|		ini_set('display_startup_errors', 1);
|		ini_set('display_errors', 1);
|		ini_set('html_errors', 1);
|		ini_set('log_errors', 1);
|		ini_set('ignore_repeated_errors', 1);
|		ini_set('ignore_repeated_source', 1);
|		ini_set('report_memleaks', 1);
|		ini_set('track_errors', 1);
|		ini_set('docref_root', "/phpmanual/");
|		ini_set('docref_ext', ".html");
|		ini_set('error_log', "C:\xampp\php\logs\php_error_log");
*/

error_reporting(E_ALL|E_STRICT);
ini_set('log_errors_max_len', 0);
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
ini_set('html_errors', 1);
ini_set('log_errors', 1);
ini_set('ignore_repeated_errors', 1);
ini_set('ignore_repeated_source', 1);
ini_set('report_memleaks', 1);
ini_set('track_errors', 1);
ini_set('docref_root', "/phpmanual/");
ini_set('docref_ext', ".html");
ini_set('error_log', "C:\xampp\php\logs\php_error_log");

?>
