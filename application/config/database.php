<?php
defined('BASEPATH') or exit('No direct script access allowed');


define('ENV_STR', 'MYSQLCONNSTR_localdb');

$return = array('result' => false);

if (isset($_SERVER[ENV_STR])) {
    $connectStr = $_SERVER[ENV_STR];

    $return['connection'] = array(
        'hostname' => preg_replace("/^.*Data Source=(.+?);.*$/", "\\1", $connectStr),
        'database' => preg_replace("/^.*Database=(.+?);.*$/", "\\1", $connectStr),
        'user' => preg_replace("/^.*User Id=(.+?);.*$/", "\\1", $connectStr),
        'password' => preg_replace("/^.*Password=(.+?)$/", "\\1", $connectStr)
    );

    $return['result'] = true;
}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($return);
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
