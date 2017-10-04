<?php
spl_autoload_register(function ($className){
  require __DIR__.'//classes/'. $className .'.php';
});



function getDB(){
  $server = "us-cdbr-iron-east-05.cleardb.net";
  $username = "be96888e962a31";
  $password = "fb38c167";
  $db = "heroku_5ad703004cc7d35";

  $conn = new mysqli($server, $username, $password, $db);


  return $conn;
}



?>
