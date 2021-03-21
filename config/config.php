<?php

if (file_exists(__DIR__ . '/../../../../vendor/autoload.php')) {
    require __DIR__ . '/../../../../vendor/autoload.php';

    $dotenv = new \Dotenv\Dotenv(__DIR__ . '/../../../../');
    $dotenv->load();
} else {
    die('Failed to load');
}

// BF3 Stats Page by Ty_ger07
// https://forum.myrcon.com/showthread.php?15754

// THE FOLLOWING INFORMATION NEEDS TO BE FILLED IN
// Read readme.txt for help.

// DATABASE INFORMATION
DEFINE('HOST', $_SERVER['DB_HOST']);													// database host address
DEFINE('PORT', '3306');												// database port - default is 3306
DEFINE('NAME', $_SERVER['DB_DATABASE']);													// database name
DEFINE('USER', $_SERVER['DB_USERNAME']);													// database user name - sometimes the same as the database name
DEFINE('PASS', $_SERVER['DB_PASSWORD']);													// database password

// CLAN NAME
$clan_name		= $_SERVER['APP_NAME'];											// your gaming clan or organization name

// PAGE BANNER
$banner_image	= './common/images/bf4-logo.png';					// your desired page banner image

// BANNER LINK
$banner_url		= $_SERVER['APP_URL'];		// where clicking on page banner will take you
