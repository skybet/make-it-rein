<?php

require '../init.php';
include __DIR__.'/../db.php';

$pdo = get_db();

$r1p1 = $_POST['race1pos1'];
$r1p2 = $_POST['race1pos2'];
$r1p3 = $_POST['race1pos3'];
$r2p1 = $_POST['race2pos1'];
$r2p2 = $_POST['race2pos2'];
$r2p3 = $_POST['race2pos3'];
$r3p1 = $_POST['race3pos1'];
$r3p2 = $_POST['race3pos2'];
$r3p3 = $_POST['race3pos3'];

$races = [];

array_push($races,
  array($r1p1,1),
  array($r1p2,2),
  array($r1p3,3),
  array($r2p1,1),
  array($r2p2,2),
  array($r2p3,3),
  array($r3p1,1),
  array($r3p2,2),
  array($r3p3,3));

  //var_dump($races);

$linkF = new HorseRaceLinkFactory($pdo);

foreach ($races as $race) {
  //var_dump($race);
  $link = $linkF->getLink($race[0]);
  $link->result = $race[1];
  $linkF->save($link);
  //var_dump($link);
}

?>
