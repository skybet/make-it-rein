<?php



    class ValidationFactory
    {
        public function __construct(PDO $db)
        {
            $this->db = $db;
        }

        public function checkRoundIdAndUser($HorseRaceLinkId)
        {
            $q = $this->db->prepare("
            SELECT
            Race.RoundId
            FROM Race
            JOIN HorseRaceLink as HR
                ON Race.RaceId = HR.RaceId
            JOIN Horse
                ON HR.HorseId = Horse.HorseId
            WHERE
                HR.HorseRaceLinkId = horseracelinkid;
            ");

            $roundId = $q->execute([
                'horseracelinkid' => $HorseRaceLinkId
            ]);

            if (!$q) {
                return false;
            }

            return $roundId;
        }
    }
