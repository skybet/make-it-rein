<!DOCTYPE html>
<html lang="en">
<head>
    <title>Make it Rein</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontAwesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/rein.css"/>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include_once('includes/productHeader.inc.php'); ?>
    <?php include_once('includes/navBar.inc.php'); ?>

    <div class="container contentBanner"> 
    

<?php

  // include 'db.php';
  include 'init.php';
  $db = get_db();
  // $id = 2;

  $email = $_POST['email'];

  $uf = new UserFactory($db);

  $row = $uf->byEmail($email);
  $id = $row[0][0];

  $r = $db->prepare("
      Select HorseRaceLinkId, Position from Prediction where UserId = :id ORDER BY HorseRaceLinkId;
  ");

  $r->execute(
    ['id' => $id]
  );
  $row = $r->fetchAll();

  $hr = $db->prepare("
      select HorseRaceLinkId, Result as Position from HorseRaceLink where HorseRaceLinkId IN (:id1, :id2, :id3, :id4, :id5, :id6, :id7, :id8, :id9) ORDER BY HorseRaceLinkId;
  ");

  $hr->execute(
    ['id1' => (int)$row[0][0],
    'id2' => (int)$row[1][0],
    'id3' => (int)$row[2][0],
    'id4' => (int)$row[3][0],
    'id5' => (int)$row[4][0],
    'id6' => (int)$row[5][0],
    'id7' => (int)$row[6][0],
    'id8' => (int)$row[7][0],
    'id9' => (int)$row[8][0]
  ]);

  $HRrow = $hr->fetchAll();

  if($HRrow === $row)
  {
    // echo "win";
    // echo "<iframe src='https://giphy.com/embed/ZPFQVis9WAAcE' width='480' height='191' frameBorder='0' class='giphy-embed'></iframe><p></p>";
      echo "<div class='mart-10p'>
        <div class='txt-ctr'>
            <h1>Results</h1>
            <h1>Congratulations, you are a winner!</h1>
            <h4>You have won the Make It Rein prize!</h4>
            <h2>We will contact you with further information via the email you have provided.</h2>
            <i class='fa fa-trophy fa-5x cl-gold' aria-hidden='true'></i>
        </div>";

  }
  else{
    echo "<div class='mart-10p'>
    <div class='txt-ctr'>
        <h1>Results:</h1>
        <h1>Sorry, you are not a winner.</h1>
        <h2>Try again by entering in the next round!</h2>
        <i class='fa fa-times fa-5x cl-warning' aria-hidden='true'></i>
    </div>";
    echo '<div class="mart-10p">
    <p class="txt-ctr txt-underline">
        This page will redirect back to the homepage in <span id="countDown"></span>
    </p>
    </div>';
  }

 ?>
</div>
<?php include_once('includes/footer.inc.php'); ?>
</body>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/fail.js"></script>
</html>

