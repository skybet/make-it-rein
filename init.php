<!DOCTYPE html>
<html lang="en">
<head>

 <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-107586799-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

   gtag('config', 'UA-107586799-1');
  </script>

 <?php

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
</head>
</html>
