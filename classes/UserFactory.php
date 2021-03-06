<?php

class UserFactory
{
    private $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function byEmail($email)
    {
        $s = $this->db->prepare("
          select
              UserId, Email
          from User
          where Email = :email
    ");
        $s->execute(['email' => $email]);
        $row = $s->fetchAll();
        if (!$row) {
            return null;
        }

        return $row;
    }

    public function domain_count()
    {
        $s = $this->db->prepare("
        SELECT right(email, length(email)-INSTR(email, '@')) as domain,
        count(right(email, length(email)-INSTR(email, '@'))) as count
        FROM MakeItRein.User
        group by right(email, length(email)-INSTR(email, '@'))
        order by right(email, length(email)-INSTR(email, '@')) desc
    ");
        $s->execute();
        $row = $s->fetchAll();
        if (!$row) {
            return null;
        }

        return $row;
    }



    public function save(User $user)
    {
        $r = $this->db->prepare("
        insert into User (Email)
        values (:Email)
    ");
        $worked = $r->execute(
      ['Email' => $user->getEmail()]
    );
        if (!$worked) {
            return false;
        }
        $user->setId($this->db->lastInsertId());
        return $user->getId();
    }
}
