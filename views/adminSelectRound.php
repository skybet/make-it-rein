<?php
require '../init.php';
include __DIR__.'/../db.php';
$pdo = get_db();

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Select Round</title>
  </head>
    <h1>Admin Select Round</h1>
  <body>
    <form class="" action="adminResultsGenerator.php" method="post">
      <span>Select the round you would like to add results to</span>
      <?php
        $rf = new RoundFactory($pdo);
        var_dump($rf->getAllRounds());
      ?>
      <input type="submit" name="" value="Add Race Results">
    </form>

  </body>
</html>
