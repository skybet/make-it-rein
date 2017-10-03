<?php include('init.php');
  //$db = getDB();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Make it Rein</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontAwesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="css/rein.css"/>
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <?php include_once('includes/productHeader.inc.php'); ?>
    <?php include_once('includes/navBar.inc.php'); ?>
    <?php include_once('db.php'); ?>
    <?php include_once('classes/HorseFactory.php') ?>
    <?php include_once('classes/HorseRace.php') ?>
    <div class="container contentBanner">
        
        <h1 class="txt-ctr marb-50">
            Race Day 1 
        </h1>
        <form class="txt-ctr">
            <div class="race1">
                <h3> Race 1 - Ascot 13:50</h3>
                <div>
                    <div class="w-30p fl-left pad-10">
                        <span > 1st: </span>
                        <select name="race1first" class="cl-black">
                            <option value="option1">Horse 1</option>
                            <option value="option2">Horse 2</option>
                            <option value="option3">Horse 3</option>
                        </select>
                    </div>
                    <div class="w-30p fl-left pad-10">
                        <span > 2nd:</span>
                        <select name="race1second" class="cl-black">
                            <option value="option1">Horse 1</option>
                            <option value="option2">Horse 2</option>
                            <option value="option3">Horse 3</option>
                        </select>
                    </div>
                    <div class="w-30p fl-left pad-10">
                        <span > 3rd:</span>
                        <select name="race1third" class="cl-black">
                            <option value="option1">Horse 1</option>
                            <option value="option2">Horse 2</option>
                            <option value="option3">Horse 3</option>
                        </select>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
            <div class="clearfix"></div>
=======

>>>>>>> master
            <div class="race2">
                <h3> Race 2 - York 14:50</h3>
                <div>
                    <div class="w-30p fl-left pad-10">
                        <span > 1st:</span>
                        <select name="race2first" class="cl-black">
                            <option value="option1">Horse 1</option>
                            <option value="option2">Horse 2</option>
                            <option value="option3">Horse 3</option>
                        </select>
                    </div>
                    <div class="w-30p fl-left pad-10">
                        <span > 2nd:</span>
                        <select name="race2second" class="cl-black">
                            <option value="option1">Horse 1</option>
                            <option value="option2">Horse 2</option>
                            <option value="option3">Horse 3</option>
                        </select>
                    </div>
                    <div class="w-30p fl-left pad-10">
                        <span > 3rd:</span>
                        <select name="race2third" class="cl-black">
                            <option value="option1">Horse 1</option>
                            <option value="option2">Horse 2</option>
                            <option value="option3">Horse 3</option>
                        </select>
                    </div>
                </div>
            </div>
<<<<<<< HEAD
            <div class="clearfix"></div>
=======

>>>>>>> master
            <div class="race3">
                <h3> Race 3 - Newmarket 17:20</h3>
                <div>
                    <div class="w-30p fl-left pad-10">
                        <span > 1st:</span>
                        <select name="race3first" class="cl-black">
                            <option value="option1">Horse 1</option>
                            <option value="option2">Horse 2</option>
                            <option value="option3">Horse 3</option>
                        </select>
                    </div>
                    <div class="w-30p fl-left pad-10">
                        <span > 2nd:</span>
                        <select name="race3second" class="cl-black">
                            <option value="option1">Horse 1</option>
                            <option value="option2">Horse 2</option>
                            <option value="option3">Horse 3</option>
                        </select>
                    </div>
                    <div class="w-30p fl-left pad-10">
                        <span > 3rd:</span>
                        <select name="race3third" class="cl-black">
                            <option value="option1">Horse 1</option>
                            <option value="option2">Horse 2</option>
                            <option value="option3">Horse 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="padt-50 ">
                <input type="email" name="email" placeholder="Enter your email" class="bord-rd cl-black pad-10 h-34">
                <input type="submit" value="Submit Predictions" class="cl-white btn btn-success">
            </div>
        </form>
    </div>

</body>
    <script src=""></script>
</html>
