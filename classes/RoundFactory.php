<?php

class RoundFactory {

    private $db;
    
    public function __construct(PDO $db){
        $this->db = $db;
    }


}

?>