<?php
defined('BASEPATH') or exit('No direct script access allowed');

$servername = "localhost";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "db_web";

// Parsing connnection string
foreach ($_SERVER as $key => $value) {
    if (strpos($key, "MYSQLCONNSTR_") !== 0) {
        continue;
    }
    
    $servername = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
    $dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
    $username = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
    $password = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}






$active_group = 'default';
$query_builder = true;



   $db['default'] = array(
    'dsn'    => '',
    'hostname' => 'localhost',
    'username' => 'azure',
    'password' => 'yes',
    'database' => 'db_web',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => array(),
    'save_queries' => true
);
