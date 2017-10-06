<?php

class RoundFactory {

    private $db;

    public function __construct(PDO $db){
        $this->db = $db;
    }

    public function getAllRounds(){
      $rounds = [];

      $q = $this->db->query("SELECT * FROM Round");
      foreach ($q as $index => $round) {

        $r = new Round($round["RoundId"],$round["StartDate"],$round["EndDate"]);
        array_push($rounds,$r);
      }
      return $rounds;
    }

}

?>
