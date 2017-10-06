<?php

class HorseRaceLink{
    public $id;
    public $horseId;
    public $raceId;
    public $result;

    public function __construct($id, $horseId, $raceId, $result){
        $this->id = $id;
        $this->horseId = $horseId;
        $this->raceId = $raceId;
        $this->result = $result;
    }
}

?>