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
      <span>Select the round you would like to add results to</span><br>
      <?php
        $rf = new RoundFactory($pdo);
        $rounds = $rf->getAllRounds();
        echo "<select name='round'>";
          foreach ($rounds as $round) {
            // $dt = new DateTime($round->startDate);
            // $rFormatStartDate = $dt->format('Y-m-d H:i:s');
            // echo $rFormatStartDate;
            echo "<option value='".$round->id."'>Round ".$round->id." (".$round->startDate." - ".$round->endDate.")</option>";
          }
        echo "</select>";
      ?>
      <input type="submit" name="" value="Add Race Results">
    </form>

  </body>
</html>
