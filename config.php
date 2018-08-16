<?php

require 'environment.php';

$config = array();

if(ENVIRONMENT == "development") {

    define("BASE_URL", "http://localhost/site/");
    $config['dbname'] = "unimed";
    $config['host'] = '10.0.0.71';
    $config['dbuser'] = 'root';
    $config['dbpass'] = 'root';
    
} else {

    define("BASE_URL", "http://localhost/site/");
    $config['dbname'] = "unimed";
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
    
}

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);
} catch(PDOException $e) {
    echo "ERRO: ".$e->getMessage();
    exit;
}



