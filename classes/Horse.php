<?php

class Horse {

    private $id;
    private $horseName;

    function __CONSTRUCT ($id, $horseName){

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