<?php
/*
|--------------------------------------------------------------------------
| Remote Debugging configuration - Debugging PHP in Sublime Text 3 
|--------------------------------------------------------------------------
| 1. Install Sublime Text 3: http://www.sublimetext.com/3
| 2. Enable XDEBUG in the PHP.ini file, then restart server.
|
|	[XDebug]
|	zend_extension = "C:\xampp\php\ext\php_xdebug.dll"
|	xdebug.profiler_append = 0
|	xdebug.profiler_enable = 1
|	xdebug.profiler_enable_trigger = 0
|	xdebug.profiler_output_dir = "C:\xampp\tmp"
|	xdebug.profiler_output_name = "cachegrind.out.%t-%s"
|	xdebug.remote_enable = 1
|	xdebug.remote_handler = "dbgp"
|	xdebug.remote_host = "127.0.0.1"
|	xdebug.trace_output_dir = "C:\xampp\tmp"
|	xdebug.collect_vars = 1
|	xdebug.show_local_vars = 1
|	xdebug.collect_params = 4
|	xdebug.remote_connect_back = 0
|	xdebug.remote_port = 9000
|	xdebug.remote_log = "C:\xampp\php\logs\xdebug.log"
|	xdebug.default_enable = 1
|	xdebug.remote_autostart = 0
|	xdebug.remote_mode = req
|	
| 3. In Sublime, go to View > Show Console. Run this script to install Package Manager.
|	
|	import urllib.request,os,hashlib; h = 'eb2297e1a458f27d836c04bb0cbaf282' + 'd0e7a3098092775ccb37ca9d6b2e4b7d'; pf = 'Package Control.sublime-package'; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); by = urllib.request.urlopen( 'http://packagecontrol.io/' + pf.replace(' ', '%20')).read(); dh = hashlib.sha256(by).hexdigest(); print('Error validating download (got %s instead of %s), please try manual install' % (dh, h)) if dh != h else open(os.path.join( ipp, pf), 'wb' ).write(by)
|
| 4. Restart Sublime and then go to Preferences > Package Control. Select “Install Package”. 
|	 Then search for “XDebug Client” and click it to install.
|
| 5. Open up your application folder('htdocs\test') in Sublime  (File > Open Folder). Save the folder as a project by going to 
|    Project > Save Project As. Save the test.sublime-project file in the root of your application folder('htdocs\test\test.sublime-project').
| 
| 6. Update the .sublime-project configation to look like this, but with your application’s url:
|	
|	{
|		"folders":
|		[
|			{
|				"follow_symlinks": true,
|				"path": "."
|			}
|		],
|		"settings": {
|				"xdebug": {
|					"url": "http://localhost/test/",
|				}
|			}
|	
|	}
|	
| 7. Sometimes, the XDebug Client doesn’t acknowledge this setting. If this is the case, 
|    go to Preferences > Package Settings > Xdebug > Settings – User. Update the “url” setting. 
|	 You can move it to the top as well for easier access.	
|	
| 8. These are the control keys:	
|	
|	Start: CTRL+SHIFT+F9
|	Stop: CTRL+SHIFT+F10
|	Add Breakpoint: CTRL+F8
|	Run: CTRL+SHIFT+F5
|	Step Over: CTRL+SHIFT+F5
|	Step Into: CTRL+SHIFT+F7
|	Step Out: CTRL+SHIFT+F8
|
*/	

$x=10;
echo $x; // set breakpoint here

/*window*
$x = (int) 10
*window*/



?>
