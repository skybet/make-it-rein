<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin Race Generator</title>
    <title>Make it Rein</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://rawgit.com/nnnick/Chart.js/v1.0.2/Chart.min.js"></script>
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
            <canvas id="myChart1" height="300" width="500"></canvas>
<script>


  var labels="<?php

  $uf = new userInteractionsFactory($db);
  $return = $uf->interactionsperday();
  foreach ($return as $row) {
      echo ' '.$row[0].''.',';
  }
?>";
var labels = labels.substring(0, labels.length-1);

var data="<?php

$uf = new userInteractionsFactory($db);
$return = $uf->interactionsperday();
foreach ($return as $row) {
    echo " ".$row[1]."".",";
}
?>";
var data = data.substring(0, data.length-1);




            var chartData = {
    labels: [labels],
    datasets: [
        {
            fillColor: "#79D1CF",
            strokeColor: "#79D1CF",
            data: [data ]
        }
    ]
};

var ctx = document.getElementById("myChart1").getContext("2d");
var myLine = new Chart(ctx).Line(chartData, {
    showTooltips: false,
    onAnimationComplete: function () {

        var ctx = this.chart.ctx;
        ctx.font = this.scale.font;
        ctx.fillStyle = this.scale.textColor
        ctx.textAlign = "center";
        ctx.textBaseline = "bottom";

        this.datasets.forEach(function (dataset) {
            dataset.points.forEach(function (points) {
                ctx.fillText(points.value, points.x, points.y - 10);
            });
        })
    }
});
</script>


      </div>
    </div>

    <?php include_once('../includes/footer.inc.php'); ?>
    <script src="../js/adminRG.js"></script>
  </body>
    <script src="<?php echo '../js/jquery-3.2.1.min.js'?>"> </script>
    <script src="<?php echo '../js/indexLogic.js'?>"> </script>
</html>
