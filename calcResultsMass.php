<?php
  // include 'db.php';
  include 'init.php';
  $db = get_db();

  // get user ids from the system

  $r = $db->prepare("
    Select UserId from User;
  ");

  $r->execute();
  $ids = $r->fetchAll();

  $winnerList = [];
  $looserList = [];

  for($i=0;$i<count($ids);$i++)
  {

    $flag=false;
    $r = $db->prepare("
        Select HorseRaceLinkId, Position from Prediction where UserId = :id ORDER BY HorseRaceLinkId;
    ");
  
    $r->execute(
      ['id' => $ids[$i][0]]
    );
    $row = $r->fetchAll();

    // echo $ids[$i][0];
    // echo count($row);

    if((int)count($row)==0)
    { 
      $flag=true;
    }
  
    $hr = $db->prepare("
        select HorseRaceLinkId, Result as Position from HorseRaceLink where HorseRaceLinkId IN (:id1, :id2, :id3, :id4, :id5, :id6, :id7, :id8, :id9) ORDER BY HorseRaceLinkId;
    ");
  
    $hr->execute(
      ['id1' => (int)$row[0][0],
      'id2' => (int)$row[1][0],
      'id3' => (int)$row[2][0],
      'id4' => (int)$row[3][0],
      'id5' => (int)$row[4][0],
      'id6' => (int)$row[5][0],
      'id7' => (int)$row[6][0],
      'id8' => (int)$row[7][0],
      'id9' => (int)$row[8][0]
    ]);
  
    $HRrow = $hr->fetchAll();

    if($flag==false)
    {
      if($HRrow === $row)
      {
          array_push($winnerList, $ids[$i][0]);
      }
      else{
        array_push($looserList, $ids[$i][0]);
      }
    }

  }




  print_r($winnerList);

  echo "<br><br>";


  print_r($looserList);








 ?>
