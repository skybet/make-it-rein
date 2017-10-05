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
    <?php include_once('../classes/HorseFactory.php'); ?>
    <?php include_once('../classes/HorseRace.php'); ?>
    <?php 
      
      $db = get_db();
      $hf = new HorseFactory($db); 
      $horses = $hf->getAllHorses();
    ?>

    <div class="container">
      <div>
        <h1>Admin Race Generator</h1>
        <form action="/action_page.php"> 
        <h3>Round</h3>
        <select id="round" class="cl-black">
          <option value="1">1 - 04/09/17-10/09/17</option>
          <option value="2">2 - 11/09/17-17/09/17</option>
          <option value="3">3 - 18/09/17-24/09/17</option>
          <option value="4">4 - 25/09/17-01/10/17</option>
          <option value="5">5 - 02/10/17-08/10/17</option>
        </select>

        <div>
            <h3>Races</h3>
              <select id=course class="cl-black">
              <option value="1">Ascot</option>
              <option value="2">Aintree</option>
              <option value="3">Newmarket</option>
              <option value="4">Cheltenham</option> 
              <option value="5">Kempton</option>
              <option value="6">York</option>
              <option value="7">Nottingham</option>
              <option value="8">Doncaster</option>
              <option value="9">Pontefract</option>
              <option value="10">Leicester</option>
            </select>
        
            <input type="date" name="race_date" class="cl-black">
            <input type="time" name="race_time" class="cl-black">
            <button type="button" onclick="selectMeetingselectTime()" class="cl-black">Add Meeting to Round</button>
        </div>

      <!-- SELECT2 Multi Select Box -->
        <div>
            <h3>Horses</h3:>
            <br><br>
            <select name="horses" multiple="" class="cl-black">
                <?php
                foreach($horses as $horse){
                  echo '<option value="'.$horse->id.'">'.$horse->horseName.'</option>';
                }
                ?>
            </select>
            <br><br>
            <button type="button" onclick="addHorse()" class="cl-black">Add Horse to Race -></button>
            <br><br>
            <button type="button" onclick="removeHorse()" class="cl-black"><- Remove Horse from Race</button><br><br>
        </div>
        </form>
      </div>
    </div>

    <?php include_once('../includes/footer.inc.php'); ?>
    <script src="adminRG.js"></script>
  </body>
    <script src="<?php echo '../js/jquery-3.2.1.min.js'?>"> </script>
    <script src="<?php echo '../js/indexLogic.js'?>"> </script>
</html>
