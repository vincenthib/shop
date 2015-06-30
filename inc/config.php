<?php
require_once 'inc/db.php';
require_once 'inc/func.php';

session_name('shop_session');
session_start();

define('FACEBOOK_SDK_ROOT_PATH', 'facebook');

define('FACEBOOK_SDK_V4_SRC_DIR', 'inc/'.FACEBOOK_SDK_ROOT_PATH.'/src/Facebook/');
require __DIR__ . '/'.FACEBOOK_SDK_ROOT_PATH.'/autoload.php';

define('FB_APP_ID', '');
define('FB_APP_SECRET', '');

$root_path = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']);