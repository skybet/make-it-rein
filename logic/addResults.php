<?php

$r1p1 = $_POST['race1pos1'];
$r1p2 = $_POST['race1pos2'];
$r1p3 = $_POST['race1pos3'];
$r2p1 = $_POST['race2pos1'];
$r2p2 = $_POST['race2pos2'];
$r2p3 = $_POST['race2pos3'];
$r3p1 = $_POST['race3pos1'];
$r3p2 = $_POST['race3pos2'];
$r3p3 = $_POST['race3pos3'];

$racePositions = [];

array_push($racePositions,
  $r1p1,
  $r1p2,
  $r1p3,
  $r2p1,
  $r2p2,
  $r2p3,
  $r3p1,
  $r3p2,
  $r3p3);

$horseRaceLink = New HorseRaceLinkFactory();

$horseRaceLink->set

?>
