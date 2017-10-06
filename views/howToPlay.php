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
            background-color: rgba(16, 114, 190, 0.57);
            width: 100%;
            text-align: left;
            padding: 8px;
            border: none;
            cursor: pointer;
            border-bottom-style: solid;
            border-width: thin;
            border-color:rgba(255, 255, 255, 0.43) ;

           }
        #downArrow{
            float: right;
        }

       .myDropdown{
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

            <br>
<div class="buttonMenu">



<div class="button" onclick="clickedMenu('md')">Do I need to register to play?<div id="downArrow">&#9660;</div></div>
<div class= "myDropdown" id='md'>
<p> You are not required to register to enter the Make it Rein competition. Entry of a valid email address will
  be required upon submission of your predictions.</p></div>


<div class="button" onclick="clickedMenu('md1')">How do I play?<div id="downArrow">&#9660;</div></div>
<div class = "myDropdown" id='md1'>
  <p> A player must predict the 1st, 2nd and 3rd placed horses in all three of the Make it Rein races. The horses should be selected from the corresponding 1st, 2nd and 3rd place dropdown menus for each of the three races. To submit your entry, enter a valid email address and click Submit Predictions.</p>
</div>

<div class="button" onclick="clickedMenu('md2')">How do I win?<div id="downArrow">&#9660;</div></div>
  <div class = "myDropdown" id='md2'>
    <p> To win the £100,000 jackpot prize, all 9 selections must be predicted correctly. If two or more players correctly predict all 9 places, the jackpot prize will be split equally amongst those players.</p>
<p>To find out if you are a winner, enter your email address on the <a href="../checkResults.php">Are you a winner?</a> page and click Check my Predictions. Winners will be contacted by email.</p>
</div>

<div class="button" onclick="clickedMenu('md3')">What happens if one of my Make it Rein selections is a non-runner?<div id="downArrow">&#9660;</div></div>
  <div class = "myDropdown" id='md3'>
    <p> If one of your selections is a non-runner, this will be counted as an incorrect prediction, therefore you will be unable to win the round or the jackpot that week.</p>
</div>

<div class="button" onclick="clickedMenu('md4')">What happens if one of the races is void/abandoned/not completed?<div id="downArrow">&#9660;</div></div>
  <div class = "myDropdown" id='md4'>
    <p>  If any Make it Rein race is postponed, abandoned or not completed the race will be considered void and all predictions for this race shall be counted as incorrect predictions, therefore you will be unable to win the round or the jackpot that week.</p>
</div>

<div class="button" onclick="clickedMenu('md5')">What happens if the jackpot is not won?<div id="downArrow">&#9660;</div></div>
  <div class = "myDropdown" id='md5'>
    <p> On completion of a Make it Rein game round where no player has correctly predicted all 9 places, the jackpot prize will roll over to the following weeks round.</p>
</div>



<script>
function clickedMenu(id){
    document.getElementById(id).classList.toggle("show");

}

</script>

     </div>
    </div>

   <?php include_once('../includes/footer.inc.php'); ?>
  </body>
    <script src="<?php echo '../js/jquery-3.2.1.min.js'?>"> </script>
    <script src="<?php echo '../js/indexLogic.js'?>"> </script>
</html>