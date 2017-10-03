<?php

class Race{
  public $id;
  public $roundId;

  public function __construct($roundId=null)
    {
      $this->roundId = $roundId
    }


  public function fromArray(array $a){
    $this->roundId= $a['RoundId'];
  }

  public function setId($id){
    $this->id = $id;
  }





}



 ?>
