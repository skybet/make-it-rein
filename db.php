<?php

function get_db()
{
    $host ='us-cdbr-iron-east-05.cleardb.net';
    $db = 'heroku_5ad703004cc7d35';
    $userdb = 'be96888e962a31';
    $pass = 'fb38c167';

   $dsn = "mysql:host=$host; dbname=$db";
    $pdo = new PDO($dsn, $userdb, $pass);
    return $pdo;
}


?>
