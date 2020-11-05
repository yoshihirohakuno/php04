<?php
/*
Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'map');

try{
    $pdo = new PDO('mysql:dbname=map;charset=utf8;host=localhost','root','root');
    //"mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME,DB_USERNAME, DB_PASSWOR
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
}
catch(PDOException $e){
    die("Error: Could not connect. " . $e->getMessage());
}
?>