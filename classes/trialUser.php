<?php


require '../init.php';
include __DIR__.'/../db.php';

  $pdo = get_db();



  $us = new UserFactory($pdo);

  $u = new User('hhhhh@nfijwhc.com');
  //var_dump($u);

  $us->save($u);

  $userIdTrial =$us->byEmail($u);

  //echo $userIdTrial;

 ?>
