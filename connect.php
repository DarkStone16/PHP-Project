<?php
session_start();
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);
$dsn = 'mysql:dbname=projet_php_b1b_urpics;host:127.0.0.1';
$user = 'root';
$password = '';
try {
    $dbh = new PDO($dsn, $user, $password);
} catch (Exception $e){
    echo $e->getMessage();
}