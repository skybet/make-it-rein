<?php

include __DIR__.'/init.php';
include __DIR__.'/db.php';
include __DIR__.'/logic/validatePredictions.php';

$db = get_db();

$userEmail = $_POST['email'];
$userId;
$raceArray = [];

array_push(
    $raceArray,
    $race1first = $_POST['race1first'],
    $race1second = $_POST['race1second'],
    $race1third = $_POST['race1third'],
    $race2first = $_POST['race2first'],
    $race2second = $_POST['race2second'],
    $race2third = $_POST['race2third'],
    $race3first = $_POST['race3first'],
    $race3second = $_POST['race3second'],
    $race3third = $_POST['race3third']
);

$userId = checkingUserEmail($userEmail, $db);

$predArray = createPredictionArray($raceArray, $userId); //called after userid is set

checkUserRound($db, $predArray, $race1first, $userId);

function writeUserPrediction($predArray, $db)
{
    $pf = new PredictionFactory($db);

    foreach ($predArray as $row) {
        $pf->save($row);
        // print_r($row);
    // echo PHP_EOL;
    }
}
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
