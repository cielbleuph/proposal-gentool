<?php
    // define('PHP_VER', '5.0');

    // // echo PHP_VER;

    // if( count(get_included_files()) == ((version_compare(PHP_VERSION, PHP_VER, '>='))?1:0) )
    // {
    //     exit('Restricted Access');
    // }

    define('MAINDIR', dirname(__DIR__) . '/');
    define('INC_DIR', MAINDIR . 'inc/');
    define('VIEWS_DIR', MAINDIR . 'views/');
    define('ASSETS_DIR', MAINDIR . 'assets/');
    define('ASSETS_IMG_DIR', ASSETS_DIR . 'images/');
    define('REPORTS_DIR', MAINDIR . 'reports/');
    define('VENDOR_DIR', MAINDIR . 'vendor/');
    define('HELPER_DIR', MAINDIR . 'inc/helper/');
    define('INC_METHODOLOGIES', MAINDIR . 'inc/methodologies/');
    