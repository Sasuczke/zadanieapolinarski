<?php

$config=require_once 'config.php';

try {
    $db_connect = new PDO("mysql:host={$config['host']};dbname={$config['database']};charster=utf8",$config['user'],$config['password'], [
        PDO::ATTR_EMULATE_PREPARES=>false,
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION
    ]);
} catch(PDOException $db_error) {
    echo $db_error;
    exit();
}