<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Race Generator</title>
    <title>Make it Rein</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo '../css/bootstrap/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo '../css/fontAwesome/css/font-awesome.min.css'?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo '../css/rein.css'?>"/>
    <link rel="icon" href="<?php echo '../img/favicon.ico'?>" type="image/x-icon">
  </head>
  <body>
    <?php include_once('../includes/productHeader.inc.php'); ?>
    <?php include_once('../includes/navBar.inc.php'); ?>

    <div class="container">
      <div>
        <h1>Admin Race Generator</h1>
        <p><b>Round</b></p>
        <select id="round">
          <option value="1">1 - 04/09/17-10/09/17</option>
          <option value="2">2 - 11/09/17-17/09/17</option>
          <option value="3">3 - 18/09/17-24/09/17</option>
          <option value="4">4 - 25/09/17-01/10/17</option>
        </select>
      </div>
    </div>

    <?php include_once('../includes/footer.inc.php'); ?>
  </body>
    <script src="<?php echo '../js/jquery-3.2.1.min.js'?>"> </script>
    <script src="<?php echo '../js/indexLogic.js'?>"> </script>
</html>
