<?php

class Horse {

    public $id;
    public $horseName;

    function __construct($id, $horseName){

        $this->id = $id;
        $this->horseName = $horseName;

    }

    function getId(){
        return $this->id;
    }

    function getHorseName(){
        return $this->horseName;
    }

}