<?php

//comment

class RaceFactory {
  private $db;


  public function __construct(PDO $db){
    $this->db = $db;

  }

  public function byRoundId($roundId){
    $s = $this->db->prepare("
          select RoundId,
              RaceId
          from Race
          where RoundId = :roundId
    ");
    $s->execute(['roundId' => $roundId]);
    if (!$s){
        return false;
    }

    $raceArray = [];

    foreach ($s as $row) {
      $race = new Race();
      $race->id = $row['RaceId'];
      $race->roundId = $row['RoundId'];

      array_push($raceArray, $race);
    }


      return $raceArray;
  }





}

?>
