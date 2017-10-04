<?php

class HorseRaceLink{
    public $id;
    public $horseId;
    public $raceId;
    public $result;

    public function __construct($id, $horseId, $raceId, $result){
        $id = $this->id;
        $horseId = $this->horseId;
        $raceId = $this->raceId;
        $result = $this->result;
    }
}

?>