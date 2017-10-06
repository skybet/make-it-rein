<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
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
    <h1>Admin Options</h1>
      <form>


      <a href="/views/adminResultsGenerator.php" class="btn btn-success">Race Results Page</a>
      <!-- <a href="/views/adminRaceGenerator.php" class="btn btn-success">Race Generator Page</a> -->
      <a href="/calcResultsMass.php" class="btn btn-success">Check Winners</a>
      <a href="/views/adminDomainTracker.php" class="btn btn-success">Domain Tracker</a>
      <a href="/views/adminIPInfo.php" class="btn btn-success">Ip Tracker</a>
      <a href="/views/adminVisitDetails.php" class="btn btn-success">Current Visits</a>
      </form>
    </div>
</div>
<br><br><br><br><br><br><br>
<?php include_once('../includes/footer.inc.php'); ?>
</body>
<script src="<?php echo '../js/jquery-3.2.1.min.js'?>"> </script>
<script src="<?php echo '../js/indexLogic.js'?>"> </script>
</html>
