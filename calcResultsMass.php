<?php
  // include 'db.php';
  include 'init.php';
  $db = get_db();

  $round = $_POST['roundNum'];

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

  // Select HorseRaceLinkId, Position from Prediction where UserId = :id ORDER BY HorseRaceLinkId;

    $flag=false;
    $r = $db->prepare("
        SELECT pred.HorseRaceLinkId, pred.Position FROM Prediction pred
        JOIN HorseRaceLink HR
        On HR.HorseRaceLinkId = pred.HorseRaceLinkId
        JOIN Race
        ON HR.RaceId = Race.RaceId
        where pred.userid = :id AND race.RoundId = :round ORDER BY HorseRaceLinkId
    ");

   
  
    $r->execute(
      ['id' => $ids[$i][0],
      'round' => $round]
    );
    $row = $r->fetchAll();

    // echo $ids[$i][0];
    // echo count($row);

    if((int)count($row)==0)
    { 
      $flag=true;
    }

    //select HorseRaceLinkId, Result as Position from HorseRaceLink where HorseRaceLinkId IN (:id1, :id2, :id3, :id4, :id5, :id6, :id7, :id8, :id9) ORDER BY HorseRaceLinkId;
  
    $hr = $db->prepare(" 
        SELECT Race.RoundId, HR.HorseRaceLinkId, HR.Result as Position FROM HorseRaceLink HR
        JOIN Race
        ON HR.RaceId = Race.RaceId
        where Race.RoundId = :round AND HR.HorseRaceLinkId IN (:id1, :id2, :id3, :id4, :id5, :id6, :id7, :id8, :id9) ORDER BY HorseRaceLinkId;
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
      'id9' => (int)$row[8][0],
      'round' => $round
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
