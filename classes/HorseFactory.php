<?php

include("Horse.php");

class HorseFactory{
    
    public function __construct(PDO $db){
        $this->db = $db;
    }

    public function getRaceHorses($raceId, $roundId){ //for MVP this is set to the 1st round
        $q = $this->db->prepare("
            SELECT 
                Horse.HorseId as HorseId,
                Horse.HorseName as HorseName,
                HR.HorseRaceLinkId as LinkId
            FROM Race
            JOIN HorseRaceLink as HR
                ON Race.RaceId = HR.RaceId
            JOIN Horse
                ON HR.HorseId = Horse.HorseId
            WHERE 
                Race.RaceId = :raceId &&
                Race.RoundId = :roundId;
        ");

        $q->execute([
            'raceId' => $raceId,
            'roundId' => $roundId
        ]);

        if (!$q) {
            return false;
        }

        $raceHorseArray = [];
        
        foreach($q as $row){

            $hr = new HorseRace();
            $hr->horseId = $row['HorseId'];
            $hr->horseName = $row['HorseName'];
            $hr->linkId = $row['LinkId'];

            array_push($raceHorseArray, $hr);
        }

        return $raceHorseArray;
    }

    public function getAllHorses(){
        $r = $this->db->query("select * from horse");
        $horses = [];
        foreach($r as $row){
            $horse = new Horse($row["HorseId"], $row["HorseName"]); 
            array_push($horses, $horse);    
        }
        return $horses;
    }

}


?>