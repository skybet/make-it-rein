<?php

class RoundFactory {

    private $db;

    public function __construct(PDO $db){
        $this->db = $db;
    }

    //get round from time of date
    //DATETIME - format: YYYY-MM-DD HH:MI:SS.
    public function getCurrentRound(){
      $s = $this->db->prepare("
      select RoundId from Round where StartDate <= NOW()
      and EndDate >= NOW()
      ");

      $s->execute(

      );

      $row = $s->fetchAll();




    $currentRound = $row[0][0];

      // echo "The trial round from factory: " .$trialRound;

      //var_dump($row[0]);
      return $currentRound;
    //  return($);
    }



    public function getStartDate($currentRound){
      $s = $this->db->prepare("
      select StartDate from Round where RoundId=:roundID
      ");

      $s->execute(['roundID' => $currentRound]);
      $row = $s->fetchAll();
      if (!$row){
          return null;
      }
      $row1 = $row[0][0];
        return $row1;
    }


    public function getAllRounds(){
        $q = $this->db->query("
            select * from round;
        ");

       $result = $q->fetchAll();

       $rounds = [];

       foreach($result as $round){
            $r = new Round($round[‘StartDate’], $round[‘EndDate’]);
            array_push($rounds, $r);
        }

       return $rounds;
    }
}












    //insert into db the current date and wait for
    // certain amount of time. Then insert in new object





?>