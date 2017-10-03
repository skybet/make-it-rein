<?php

  class Prediction {
    public $id;
    public $hrLinkId;
    public $userId;
    public $placePrediction;

   public function __construct($hrLinkId=null, $userId=null, $placePrediction=null)
    {
      $this->hrLinkId = $hrLinkId;
      $this->userId = $userId;
      $this->placePrediction = $placePrediction;
    }


    public function fromArray(array $a){
      $this->hrLinkId = $a['HorseRaceLinkId'];
      $this->userId = $a['UserId'];
      $this->placePrediction = $a['Position'];
    }

  }




 ?>
