<?php

require_once (__DIR__ . '/global.php');
// for mysql database
$dbName = DB_NAME;
$dbHost = DB_HOST;

$dsn = "mysql:host=$dbHost;port=3306;dbname=$dbName";

$pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
//////////////////////

// for sqlserver database
$serverName = SERVER_NAME; 
$connectionInfo = CONNECTION_INFO;
$conn = sqlsrv_connect( $serverName, $connectionInfo);
print_r($serverName);

if( $conn ) {
     echo "Connection established.<br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}