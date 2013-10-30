<?php
date_default_timezone_set('Europe/Helsinki');


define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'content/');
define('CONTENT_EXT', '.md');
define('LIB_DIR', ROOT_DIR .'lib/');
define('PLUGINS_DIR', ROOT_DIR .'plugins/');
define('THEMES_DIR', ROOT_DIR .'themes/');
define('CACHE_DIR', LIB_DIR .'cache/');

// Define Hippycache time-to-live
define('HIPPYCACHE_TTL', 60 * 5);

require(ROOT_DIR .'vendor/autoload.php');
require(LIB_DIR .'pico.php');

/**~~HIPPYCACHE-BEGIN~~**/
$hippycache = NULL;
/**~~HIPPYCACHE-END~~**/

$pico = new Pico();
