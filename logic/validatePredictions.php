<?php

function checkingUserEmail($email, $db)
{
    $userFactory = new UserFactory($db);
    $r = $userFactory->byEmail($email);

    if (empty($r)) {

    //Validate horses that have been input and then input prediction
        echo "Create new user and post prediction";
        $user = new User($db);
        $user->setEmail($email);
        $userId = $userFactory->save($user);
        return $userId;
    } else {
        //Check user has not already predicted this round
        echo "User has predicted before but maybe not in this round<br>";
        $userId = $r[0][0];
        return $userId;
    };
};

function checkUserRound($db, $predArray, $race1first, $userId)
{
    $vf = new ValidationFactory($db);

    $q = $vf->checkRoundIdAndUser($race1first, $userId);

    if ($q) {
        writeUserPrediction($predArray, $db);
    } else {
        echo "sod off";
    }
}
