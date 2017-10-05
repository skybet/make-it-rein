<?php


require '../init.php';
include __DIR__.'/../db.php';

$roundId = 4;

  $pdo = get_db();



  $us = new UserFactory($pdo);

  $u = new User('Harry@email.com');
  //var_dump($u);

  $us->save($u);

  $userIdTrial =$us->byEmail($u->email);

  $rf = new RaceFactory($pdo);


  $r = new Race($roundId);


  $findRaceFromRound = $rf->byRoundId($r->roundId);

  $rfactory=new RoundFactory($pdo);

  //$rounds= new Round();

  $trial = $rfactory->getCurrentRound();
  $theDate = $rfactory->getStartDate($trial);
  echo "THIS IS THE TRIAL  ".$trial;

  echo "The start date is........".$theDate;

  //echo "findRaceFromRound hereeeeee";
//  var_dump($findRaceFromRound);

  //echo $userIdTrial;

 ?>
