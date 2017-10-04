<?php
require '../init.php';
require '../db.php';

//INPUT THAT IS REQUIRED
$email = 'User3@user.com';
$race1first = 5;

//get DB
$db = get_DB();


$userFactory = new UserFactory($db);
$r = $userFactory->byEmail($email);
var_dump($r);
if (empty($r)) {

    //Validate horses that have been input and then input prediction
    echo "Input prediction to DB";
} else {
    //Check user has not already predicted this round
    echo "User has predicted before but maybe not in this round<br>";
    CheckUserRound($db, $race1first);
};


function CheckUserRound($db, $race1first)
{
    $vf = new ValidationFactory($db);
    $currentRound = 2;

    $roundPrediction = $vf->checkRoundIdAndUser($race1first);
    $roundPrediction = (int)$roundPrediction;

    if ($currentRound == $roundPrediction) {
        //Enable users to change their entries within competition window
        echo "already placed prediction on this round";
    } else {

        //Validate horses that have been input and then input prediction
        echo "input prediction to db";
    }
}
