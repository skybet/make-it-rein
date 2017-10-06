<?php require __DIR__."/../init.php"; ?>


 <!DOCTYPE html>
 <html>
   <head>
    <meta charset="utf-8">
    <title>Admin Results Generator</title>
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
      <h1>Admin Results Generator</h1>
     <form class="" action="../logic/addResults.php" method="post">
      <?php

        $db = get_db();
        $rfactory=new RoundFactory($db);
        $raceFactory = new RaceFactory($db);
        $hf = new HorseFactory($db);

        $currentId = $rfactory->getCurrentRound();
        $raceIds = $raceFactory->byRoundId($currentId);

          foreach ($raceIds as $key=>$race) {
              $horses = $hf->getRaceHorses($race->id, $currentId);
              echo "<h3>Race ".$race->id."</h3>";
              for($x=1; $x<=3; $x++){
                echo "<span>Position $x: </span>";
                echo "<select class='cl-black' name='race".(($key)+1)."pos".$x."'>";
                  foreach($horses as $horse){
                    echo "<option value='".$horse->linkId."'>$horse->horseName</option>";
                  }
                echo "</select><br>";
              }
              // echo "<br>";
          }
      ?>
      <br>
      <input type="submit" value="Submit" class="cl-black">
      </form>
      </div>
     </div>
     <?php include_once('../includes/footer.inc.php'); ?>
   </body>
   <script src="<?php echo '../js/jquery-3.2.1.min.js'?>"> </script>
  <script src="<?php echo '../js/indexLogic.js'?>"> </script>
 </html>
