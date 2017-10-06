<?php
date_default_timezone_set('UTC');
 spl_autoload_register(function ($className) {
     require __DIR__.'//classes/'. $className .'.php';
 });

 function get_db()
 {
     $host ='127.0.0.1';
     $db = 'MakeItRein';
     $userdb = 'user1';
     $pass = 'mypass';
     $dsn = "mysql:host=$host; dbname=$db";
     $pdo = new PDO($dsn, $userdb, $pass);
     return $pdo;
 }

 ?>