<?php

include __DIR__.'/init.php';
//include __DIR__.'/db.php';
include __DIR__.'/logic/validatePredictions.php';
include __DIR__.'/logic/tracker.php';
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

tracker($userId);

$text = checkUserRound($db, $predArray, $race1first, $userId);


// echo $text;
// echo "<br><br>";

$uf = new UserFactory($db);

$emailForUse = $uf->byEmail($userEmail);
if (!isset($emailForUse)) {
    //echo "not in db";
} else {
    // print_r($emailForUse[0][0]);
    $userId = $emailForUse[0][0];
    require 'vendor/autoload.php';
    // If you are not using Composer
// require("path/to/sendgrid-php/sendgrid-php.php");
    $from = new SendGrid\Email("Example User", "noreply@makeitrein.com");
    $subject = "Bet Confirmation";
    $to = new SendGrid\Email("Example User", "$userEmail");
    $content = new SendGrid\Content("text/html", " ");
    $mail = new SendGrid\Mail($from, $subject, $to, $content);
    $mail->setTemplateId("25f5b144-047a-46a8-a930-f152c2f6496d");
    $apiKey = getenv('SENDGRID_API_KEY');
    $sg = new \SendGrid($apiKey);
    $response = $sg->client->mail()->send()->post($mail);
    //echo $response->statusCode();
    // print_r($response->headers());
    // echo $response->body();
}
