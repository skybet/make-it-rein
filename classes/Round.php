<?php

class Round{

    public $id;
    public $startDate;
    public $endDate;

    public function __construct($startDate, $endDate){
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function getStartDate(){
        return $this->startDate;
    }

    public function getEndDate(){
        return $this->endDate;
    }
}

?>
