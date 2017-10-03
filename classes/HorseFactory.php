<?php

class HorseFactory{
    
    public function __construct(PDO $db){
        $this->db = $db;
    }

    public function getRaceHorses($raceId, $roundId = 1){ //for MVP this is set to the 1st round
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
                Race.RoundId = 1;
        ");

        $q->execute([
            'raceId' => $raceId
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
    
}


?>