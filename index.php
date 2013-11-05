<?php
date_default_timezone_set('Europe/Helsinki');


define('ROOT_DIR', realpath(dirname(__FILE__)) .'/');
define('CONTENT_DIR', ROOT_DIR .'content/');
define('CONTENT_EXT', '.md');
define('LIB_DIR', ROOT_DIR .'lib/');
define('PLUGINS_DIR', ROOT_DIR .'plugins/');
define('THEMES_DIR', ROOT_DIR .'themes/');
define('CACHE_DIR', LIB_DIR .'cache/');

define('HIPPYCACHE_TTL', 60 * 5); // Hippycache time-to-live
define('HIPPYCACHE_FILE', 'hippycache.php'); // Hippycache file

require(ROOT_DIR .'vendor/autoload.php');
require(LIB_DIR .'pico.php');

$hippycache = NULL;

if (file_exists(HIPPYCACHE_FILE) && filemtime(HIPPYCACHE_FILE) > time() - HIPPYCACHE_TTL) {
  include_once(HIPPYCACHE_FILE);
}

$pico = new Pico();
