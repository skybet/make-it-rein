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
        <h3>Round</h3>
        <select id="round" class="cl-black">
          <option value="1">1 - 04/09/17-10/09/17</option>
          <option value="2">2 - 11/09/17-17/09/17</option>
          <option value="3">3 - 18/09/17-24/09/17</option>
          <option value="4">4 - 25/09/17-01/10/17</option>
          <option value="5">5 - 02/10/17-08/10/17</option>
        </select>

        <div>
          <form action="/action_page.php"> 
            <h3>Races</h3>
              <option value="1">Ascot</option>
              <option value="2">Aintree</option>
              <option value="3">Newmarket</option>
              <option value="4">Cheltenham</option> 
              <option value="5">Kempton</option>
              <option value="6">York</option>
              <option value="7">Nottingham</option>
              <option value="8">Doncaster</option>
            </select>
            <button type="button" onclick="addRaceToArray()" class="cl-black">Select Meeting</button>
            <input type="time" name="usr_time" class="cl-black">
            <button type="button" onclick="selectTime()" class="cl-black">Select Time</button>
          </form> 
        </div>

      <!-- SELECT2 Multi Select Box -->
        <!-- <div>
            <h3>Horses</h3>
            <select name="horses" multiple="" class="cl-black">
            <option value="1">Take A Break</option>
            <option value="2">The Last Samuri</option>
            <option value="3">Regal Encore</option>
            <option value="4">Rule The World</option>
            <option value="5">Harry Chaplain</option>
            </select>
            <br><br>
            <button type="button" onclick="addHorse()" class="cl-black">Add Horse</button>
            <button type="button" onclick="removeHorse()" class="cl-black">Remove Horse</button><br><br>
        </div> -->
      </div>
    </div>

    <?php include_once('../includes/footer.inc.php'); ?>
    <script src="adminRG.js"></script>
  </body>
    <script src="<?php echo '../js/jquery-3.2.1.min.js'?>"> </script>
    <script src="<?php echo '../js/indexLogic.js'?>"> </script>
</html>
