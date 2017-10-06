<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>How To Play</title>
    <title>Make it Rein</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo '../css/bootstrap/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo '../css/fontAwesome/css/font-awesome.min.css'?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo '../css/rein.css'?>"/>
    <link rel="icon" href="<?php echo '../img/favicon.ico'?>" type="image/x-icon">

    <style>
        .button {
            background-color: rgb(16,114,190);
            width: 100%;
            text-align: left;
            padding: 8px;
            border: none;
            cursor: pointer;
        
            }
        #downArrow{
            float: right;
        }

        #myDropdown{
            display: none;
            width: 100%;
            padding: 8px;
            background-color: #fff;
            color: rgb(18,45,124);
        
        }

        .show{
            display: block;
        }





    </style>
  </head>
  <body>
    <?php include_once('../includes/productHeader.inc.php'); ?>
    <?php include_once('../includes/navBar.inc.php'); ?>

    <div class="container">
      <div>
            <!-- How To Play  -->
            <h2 class ="txt-ctr">How To Play</h2>
<div class="buttonMenu">
<div class="button" onclick="clickedMenu()">Do I need to register to play?<div id="downArrow">&#9660;</div></div>
<div id = "myDropdown">
<p>You do not need to register to enter the Make it Rein competition.</p></div>



<div class="button" onclick="clickedMenu()">How do I win?<div id="downArrow">&#9660;</div></div>
<div id = "myDropdown">
</div>


<script>
function clickedMenu(){
    document.getElementById("myDropdown").classList.toggle("show");

}




</script>




      </div>
    </div>

    <?php include_once('../includes/footer.inc.php'); ?>
  </body>
    <script src="<?php echo '../js/jquery-3.2.1.min.js'?>"> </script>
    <script src="<?php echo '../js/indexLogic.js'?>"> </script>
</html>
