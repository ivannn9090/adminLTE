<?php
defined('BASEPATH') or exit('No direct script access allowed');


define('ENV_STR', 'MYSQLCONNSTR_localdb');

$return = array('result' => false);

if (isset($_SERVER[ENV_STR])) {
    $connectStr = $_SERVER[ENV_STR];

    $return['connection'] = array(
        'hostname' => preg_replace("/^.*Data Source= localhot", $connectStr),
        'database' => preg_replace("/^.*Database= db_web", $connectStr),
        'user' => preg_replace("/^.*User Id= azure", $connectStr),
        'password' => preg_replace("/^.*Password= 6#vWHD_$", $connectStr)
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
