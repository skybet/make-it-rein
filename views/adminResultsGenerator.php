<?php

require '../init.php';
include __DIR__.'/../db.php';
$pdo = get_db();

$races = [1,2,3];

?>

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
        $round = $_POST['round'];

        echo "<h3>Enter Round $round Results</h3>";

          foreach ($races as $race) {
              $hf = new HorseFactory($pdo);
<<<<<<< HEAD
              $horses = $hf->getRaceHorses($race, $round);
              echo "<h4>Race $race</h4>";
=======
              $horses = $hf->getRaceHorses($race, 5);
              echo "<h3>Race $race</h3>";
>>>>>>> 1e15d9fece4b81c21ebc097caed5c3389d131c49
              for($x=1; $x<=3; $x++){
                echo "<span>Position $x: </span>";
                echo "<select class='cl-black' name='race".$race."pos".$x."'>";
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
