<!-- <!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <form action="calcResults.php" method="post">

      <input type="email" name="email">
      <input type="submit">

    </form>

  </body>
</html> -->

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
    <?php include_once('db.php'); ?>
    <?php include_once('classes/HorseFactory.php'); ?>
    <?php include_once('classes/HorseRace.php'); ?>
    <?php
        $db = get_db();
        $hf = new HorseFactory($db);
        $race1 = $hf->getRaceHorses(1);
        $race2 = $hf->getRaceHorses(2);
        $race3 = $hf->getRaceHorses(3);
    ?>
    <div class="container contentBanner">
        <div class="mart-10p">
            <h1 class="txt-ctr">Check Your Results</h1>
            <form method="post" class="txt-ctr" action="calcResults.php">
              <input type="email" name="email" placeholder="Enter your email" class="bord-rd cl-black pad-10 h-34">
              <input type="submit" value="Check my Predictions" class="cl-white btn btn-success">
            </form>
        </div>
    </div>

    <?php include_once('includes/footer.inc.php'); ?>

</body>
    <script src=""></script>
</html>
