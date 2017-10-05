<?php

class HorseRaceLinkFactory{

    public function __construct(PDO $db){
        $this->db = $db;
    }

    public function getLink($linkId){
      echo $linkId;
        $stmt = $this->db->prepare("
            select *
            from HorseRaceLink
            where HorseRaceLinkId = :linkid
        ");

        $stmt->execute([
          'linkid'=>$linkId
        ]);

        $result = $stmt->fetchAll();

        $horseRaceLink = new HorseRaceLink(null, null, null, null);

        foreach($result as $r){
          $horseRaceLink->id = $r['HorseRaceLinkId'];
          $horseRaceLink->horseId = $r['HorseId'];
          $horseRaceLink->raceId = $r['RaceId'];
          $horseRaceLink->result = $r['Result'];
        }

        return $horseRaceLink;
    }

    public function save(HorseRaceLink $link) {
        if(isset($link->id)) {
            //redirect to update
            return $this->update($link);
        }
        $stmt = $this->db->prepare("
            insert into horseracelink (horseid, raceid, result)
            values (:horseid, :raceid, :result)
        ");
        $result = $stmt->execute([
            'horseid' => $link->horseId,
            'raceid' => $link->raceId,
            'result' => $link->result
        ]);
        $link->id = $this->db->lastInsertId();
    }
    private function update(HorseRaceLink $link) {
        $stmt = $this->db->prepare("
            update HorseRaceLink set
                Result = :result
            where HorseRaceLinkId = :linkid
        ");
        $result = $stmt->execute([
            'result' => $link->result,
            'linkid' => $link->id
        ]);
        if($result){
          echo "<p>Hit</p>";
        } else {
          echo "<p>Broke</p>";
        }
    }

}

?>
