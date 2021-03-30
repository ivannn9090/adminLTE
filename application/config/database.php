<?php
defined('BASEPATH') or exit('No direct script access allowed');

$connectstr_dbhost = 'localhost';
$connectstr_dbname = 'db_web';
$connectstr_dbusername = 'azure';
$connectstr_dbpassword = '6#vWHD_$';

foreach ($_SERVER as $key => $value) {
  if (strpos($key, "MYSQLCONNSTR_") !== 0) {
    continue;
  }

  $connectstr_dbhost = preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $value);
  $connectstr_dbname = preg_replace("/^.*Database=(.+?);.*$/", "\\1", $value);
  $connectstr_dbusername = preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $value);
  $connectstr_dbpassword = preg_replace("/^.*Password=(.+?)$/", "\\1", $value);
}

define('DB_NAME', $connectstr_db_web);
define('DB_USER', $connectstr_azure);
define('DB_PASSWORD', $connectstr_6#vWHD_$);
define('DB_HOST', $connectstr_localhost);

$active_group = 'default';
$query_builder = true;

$db['default'] = array(
    'dsn'    => '',
    'hostname' => 'localhost',
    'username' => 'azure',
    'password' => '6#vWHD_$',
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

