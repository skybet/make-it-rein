<?php

function tracker($userid)
{
    $ip = $_SERVER['REMOTE_ADDR'];
    $browserinfo = $_SERVER['HTTP_USER_AGENT'];


    $date = new DateTime();
    $datetimeaccessed = date('Y-m-d H:i:s', time() + 3600);

    $pdo = get_db();

    $r = $pdo->prepare("
  INSERT INTO MakeItRein.UserInteraction (UserId, datetimeaccessed, ip, browserinfo)
  VALUES (:userid, :datetimeaccessed, :ip, :browserinfo)");

    $r->execute(array(
    ':userid' => $userid,
    ':datetimeaccessed' => $datetimeaccessed,
    ':ip' => $ip,
    ':browserinfo' => $browserinfo ));
}
