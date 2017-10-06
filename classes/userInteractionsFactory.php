<?php

    class userInteractionsFactory
    {
        public $trackerId;
        public $userId;
        public $datetimeaccessed;
        public $ip;
        public $browerInfo;

        public function __construct(PDO $db)
        {
            $this->db = $db;
        }

        public function all_interactions()
        {
            $s = $this->db->prepare("
                SELECT Trackerid, userid,
                datetimeaccessed, ip, browserinfo
                FROM MakeItRein.UserInteraction
                order by Trackerid desc
        ");
            $s->execute();
            $row = $s->fetchAll();
            if (!$row) {
                return null;
            }

            return $row;
        }

        public function interactionsperday()
        {
            $s = $this->db->prepare("
            SELECT
            DATE_FORMAT(datetimeaccessed, '%m-%d') as date,
            count(DATE_FORMAT(datetimeaccessed, '%m-%d')) as  visits
            FROM MakeItRein.UserInteraction
            group by DATE_FORMAT(datetimeaccessed, '%m-%d')
            order by date desc

        ");
            $s->execute();
            $row = $s->fetchAll();
            if (!$row) {
                return null;
            }

            return $row;
        }

        public function top_ips()
        {
            $s = $this->db->prepare("
            SELECT ip, count(ip)
            FROM  MakeItRein.UserInteraction
            group by ip
        ");
            $s->execute();
            $row = $s->fetchAll();
            if (!$row) {
                return null;
            }

            return $row;
        }
    }
