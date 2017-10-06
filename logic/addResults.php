<!DOCTYPE html>
<html lang="en">
<head>
    <title>Make it Rein</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/fontAwesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="../css/rein.css"/>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include_once('../includes/productHeader.inc.php'); ?>
    <?php include_once('../includes/navBar.inc.php'); ?>

    <div class="container contentBanner">
        <div class="mart-10p">
            <div class="txt-ctr">
                <h1>The results have been successfully saved!</h1>
                <i class="fa fa-check fa-5x cl-success" aria-hidden="true"></i>
            </div>
            </div>
<?php
require '../init.php';

$pdo = get_db();

$r1p1 = $_POST['race1pos1'];
$r1p2 = $_POST['race1pos2'];
$r1p3 = $_POST['race1pos3'];
$r2p1 = $_POST['race2pos1'];
$r2p2 = $_POST['race2pos2'];
$r2p3 = $_POST['race2pos3'];
$r3p1 = $_POST['race3pos1'];
$r3p2 = $_POST['race3pos2'];
$r3p3 = $_POST['race3pos3'];

$races = [];

array_push($races,
  array($r1p1,1),
  array($r1p2,2),
  array($r1p3,3),
  array($r2p1,1),
  array($r2p2,2),
  array($r2p3,3),
  array($r3p1,1),
  array($r3p2,2),
  array($r3p3,3));

  //var_dump($races);

$linkF = new HorseRaceLinkFactory($pdo);

foreach ($races as $race) {
  //var_dump($race);
  $link = $linkF->getLink($race[0]);
  $link->result = $race[1];
  $linkF->save($link);
  //var_dump($link);
}
?>

<br><br><br><br><br><br><br>
<?php include_once('../includes/footer.inc.php'); ?>
</body>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/success.js"></script>
</html>
