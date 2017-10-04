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
   </head>
   <h1>Admin Results Generator</h1>
   <body>
     <form class="" action="../logic/addResults.php" method="post">
      <?php
          foreach ($races as $race) {
              $hf = new HorseFactory($pdo);
              $horses = $hf->getRaceHorses($race);
              echo "<h4>Race $race</h4>";
              for($x=1; $x<=3; $x++){
                echo "<span>Position $x</span>";
                echo "<select name='race".$race."pos".$x."'>";
                  foreach($horses as $horse){
                    echo "<option value='".$horse->linkId."'>$horse->horseName</option>";
                  }
                echo "</select>";
              }
              echo "<br>";

          }
      ?>
      <input type="submit" value="Submit">
     </form>
   </body>
 </html>
