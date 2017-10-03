<?php
spl_autoload_register(function ($className){
  require '../classes/'.strtolower($className).'.php';
});


$server = "us-cdbr-iron-east-05.cleardb.net";
$username = "be96888e962a31";
$password = "fb38c167";
$db = "heroku_5ad703004cc7d35";

$conn = new mysqli($server, $username, $password, $db);

// function getDB(){
//     $host = 'us-cdbr-iron-east-05.cleardb.net';
//     $db   = 'heroku_5ad703004cc7d35';
//     $user = 'be96888e962a31';
//     $pass = 'fb38c167';
//
//     $dsn = "mysql://be96888e962a31:fb38c167@us-cdbr-iron-east-05.cleardb.net/heroku_5ad703004cc7d35?reconnect=true";
//     $pdo = new PDO($dsn, $user, $pass);
//
//     return $pdo;
// }


?>
