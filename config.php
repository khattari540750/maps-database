<?php
/*
Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password)
*/

try{
    $dbinfo = parse_url(getenv('DATABASE_URL'));
	$dsn = 'pgsql:host=' . $dbinfo['host'] . ';dbname=' . substr($dbinfo['path'], 1);
	$pdo = new PDO($dsn, $dbinfo['user'], $dbinfo['pass']);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
}
catch(PDOException $e){
    die("Error: Could not connect. " . $e->getMessage());
}
?>