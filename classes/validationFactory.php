<?php



    class ValidationFactory
    {
        public function __construct(PDO $db)
        {
            $this->db = $db;
        }

        public function checkRoundIdAndUser($HorseRaceLinkId, $UserId)
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
                HR.HorseRaceLinkId = :horseracelinkid;
            ");

            $q->execute([
                'horseracelinkid' => $HorseRaceLinkId
            ]);

            $roundId = $q->fetchAll();

            $q2 = $this->db->prepare("
              SELECT rac.RoundId FROM MakeItRein.Prediction prd
              JOIN horseracelink hrl
              ON hrl.HorseRaceLinkId = prd.HorseRaceLinkId
              JOIN Race rac
              ON rac.RaceId = hrl.RaceId
              where userid = :userId
              group by prd.UserId, rac.RoundId
              order by rac.RoundId desc
              LIMIT 1");

            $q2->execute([
                  ':userId' => $UserId
              ]);

            $returnedRow = $q2->fetchAll();

            if (!$q2) {
                return false;
            }

            if (empty($returnedRow)) {
                //echo "You have never bet";
                return true;
            } else {
                echo $returnedRow[0][0];
                echo $roundId[0][0];

                if ($returnedRow[0][0] == $roundId[0][0]) {
                    //echo "you have already bet on this round";
                    return false;
                } else {
                    //echo "you have not bet on this round yet" ;
                    return true;
                }
            }
        }
    }
