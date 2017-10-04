<?php

function get_db()
{
    $host ='127.0.0.1';
    $db = 'MakeItRein';
    $userdb = 'user1';
    $pass = 'mypass';
<<<<<<< HEAD

    $dsn = "mysql:host=$host; dbname=$db";
=======
   $dsn = "mysql:host=$host; dbname=$db";
>>>>>>> master
    $pdo = new PDO($dsn, $userdb, $pass);
    return $pdo;
}
