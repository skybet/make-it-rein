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








      //return $currentDate;
    }







    //insert into db the current date and wait for
    // certain amount of time. Then insert in new object



}

?>
