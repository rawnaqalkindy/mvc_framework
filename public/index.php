<?php
/*
 * This file is part of the Abc package.
 *
 * This source code is for educational purposes only. 
 * It is not recommended using it in production as it is.
 */

use Raunaq\App;

const DS = '/';

define('ROOT_PATH', realpath(dirname(__FILE__, 2)));

// echo ROOT_PATH;
// exit; 

/**
 * Load the composer library
 */
$autoload = ROOT_PATH . '/vendor/autoload.php';

if (is_file($autoload)) {
    require $autoload;
}

error_reporting(E_ALL);

// echo 'HELLO';

try {
    new App();
} catch (Exception $e) {
    echo $e->getMessage();
}