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
    <?php include_once('../db.php'); ?>
    <?php include_once('../classes/userInteractionsFactory.php'); ?>


    <?php

      $db = get_db();

    ?>

    <div class="container">
      <div>
        <h1>Admin Page Visit Details</h1>
        <table class="table">
          <tr>
                <th>Interation ID</th>
                <th>User Id</th>
                <th>Date Time</th>
                <th>IP Address</th>
                <th>Device</th>
          </tr>
          <?php
            $userInteractions = new userInteractionsFactory($db);
            $return = $userInteractions->all_interactions();

            foreach ($return as $row) {
                echo "<tr>";
                echo "<td>". $row[0]."</td>";
                echo "<td>". $row[1]."</td>";
                echo "<td>". $row[2]."</td>";
                echo "<td>". $row[3]."</td>";
                echo "<td>". $row[4]."</td>";
                echo "</tr>";
            }
           ?>
        </table>
      </div>
    </div>

    <?php include_once('../includes/footer.inc.php'); ?>
    <script src="adminRG.js"></script>
  </body>
    <script src="<?php echo '../js/jquery-3.2.1.min.js'?>"> </script>
    <script src="<?php echo '../js/indexLogic.js'?>"> </script>
</html>
