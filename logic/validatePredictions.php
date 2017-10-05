<?php

function checkingUserEmail($email, $db)
{
    $userFactory = new UserFactory($db);
    $r = $userFactory->byEmail($email);

    if (empty($r)) {

    //Validate horses that have been input and then input prediction
        //echo "Create new user and post prediction";
        $user = new User($db);
        $user->setEmail($email);
        $userId = $userFactory->save($user);
        return $userId;
    } else {
        //Check user has not already predicted this round
        //echo "User has predicted before but maybe not in this round<br>";
        $userId = $r[0][0];
        return $userId;
    };
};

function checkUserRound($db, $predArray, $race1first, $userId)
{
    $vf = new ValidationFactory($db);

    $q = $vf->checkRoundIdAndUser($race1first, $userId);

    $textForReturn;
    if ($q) {
        writeUserPrediction($predArray, $db);

        $textForReturn = "prediction written to db";
        header('Location: success.php');
        return $textForReturn;
    } else {
        $textForReturn = "You have already predicted on this round";
        header('Location: fail.php');
        return $textForReturn;
    }
};


function writeUserPrediction($predArray, $db)
{
    $pf = new PredictionFactory($db);

    foreach ($predArray as $row) {
        $pf->save($row);
        // print_r($row);
        // echo PHP_EOL;
    }
};


function createPredictionArray($raceArray, $userId)
{
    $predArray = [];

    foreach ($raceArray as $i => $row) {
        $i = ($i%3)+1;
        // echo $i;
        $pred = new Prediction($row, $userId, $i);
        array_push($predArray, $pred);
    };
    return $predArray;
};
