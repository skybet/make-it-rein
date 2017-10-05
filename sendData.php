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

$text = checkUserRound($db, $predArray, $race1first, $userId);

echo $text;
echo "<br><br>";

$uf = new UserFactory($db);

$emailForUse = $uf->byEmail($userEmail);
if (!isset($emailForUse)) {
    echo "not in db";
} else {
    // print_r($emailForUse[0][0]);
    $userId = $emailForUse[0][0];
    require 'sendgrid-php/vendor/autoload.php';

    $from = new SendGrid\Email("Make it Rein", "Noreply@makeitrein.com");
    $subject = "Your Bet Confirmation";
    $to = new SendGrid\Email("Example User", "harrychaplain@hotmail.co.uk");
    $content = new SendGrid\Content("text/html", "<h1> Your bet has been placed!</h1><h3> Good Luck!</h3>");
    $mail = new SendGrid\Mail($from, $subject, $to, $content);

    $apiKey = $apiKey = getenv('SENDGRID_API_KEY');

    $sg = new \SendGrid($apiKey);

    $response = $sg->client->mail()->send()->post($mail);
    echo $response->statusCode();
    print_r($response->headers());
    echo $response->body();
}
