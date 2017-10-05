<?php

class PredictionFactory {
  private $db;


  public function __construct(PDO $db){
    $this->db = $db;

  }

  public function save(Prediction $prediction){
    $r = $this->db->prepare("
        insert into Prediction (HorseRaceLinkId, UserId, Position)
        values (:HorseRaceLinkId, :UserId, :Position)
    ");
    $worked = $r->execute(
      ['HorseRaceLinkId' => $prediction->hrLinkId,
      'UserId' => $prediction->userId,
      'Position' => $prediction->placePrediction]
    );
    if (!$worked) {
      return false;
    }
    $prediction->setId($this->db->lastInsertId());
    return true;
  }



}

 ?>
