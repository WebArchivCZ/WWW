<?php

// absolute filesystem path to this web root
define('WWW_DIR', __DIR__);

// absolute filesystem path to the application root
define('APP_DIR', WWW_DIR . '/app');

// absolute filesystem path to the libraries
define('LIBS_DIR', WWW_DIR . '/libs');

// uncomment this line and comment the rest till the end if you must temporarily take down your site for maintenance
//require APP_DIR . '/templates/util/maintenance.latte';

// load bootstrap file
require LIBS_DIR . '/nette.phar';
require APP_DIR . '/bootstrap.php';
