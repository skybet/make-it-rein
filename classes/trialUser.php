<?php


require '../init.php';
//include __DIR__.'/../db.php';

  $pdo = getDB();



  $us = new UserFactory($pdo);

  $u = new User('Harry@email.com');
  //var_dump($u);

  $us->save($u);

  $userIdTrial =$us->byEmail($u);

  //echo $userIdTrial;

 ?>
