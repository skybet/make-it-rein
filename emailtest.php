<?php
require 'sendgrid-php/vendor/autoload.php';

$from = new SendGrid\Email("Make it Rein", "Noreply@makeitrein.com");
$subject = "Your Bet Confirmation";
$to = new SendGrid\Email("Example User", "harrychaplain@hotmail.co.uk");
$content = new SendGrid\Content("text/html", "Thank you for placing your bet");
$mail = new SendGrid\Mail($from, $subject, $to, $content);

$apiKey = $apiKey = getenv('SENDGRID_API_KEY');;

$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($mail);
echo $response->statusCode();
print_r($response->headers());
echo $response->body();




 ?>
