<?php

class HorseRaceLinkFactory{

    public function __construct($db){
        $this->db = $db;
    }

    public function getLink($linkId){
        $stmt = $this->db->prepare("
            select * 
            from horseracelink
            where horseracelinkid = :id;
        ");
        $result = $stmt->execute([
            'id' => $linkId
        ]);

        $horseRaceLink = new HorseRaceLink();
        $horseRaceLink->id = $result['horseracelinkid'];
        $horseRaceLink->horseId = $result['horseid'];
        $horseRaceLink->raceID = $result['raceid'];
        $horseRaceLink->result = $result['result'];

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
            update horseracelink set
                result = :result
            where id = :linkid
        ");
        $result = $stmt->execute([
            'result' => $link->result,
            'linkid' => $link->id
        ]);
    }

}

?>