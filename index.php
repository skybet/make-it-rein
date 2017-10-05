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
    <?php include_once('classes/HorseFactory.php'); ?>
    <?php include_once('classes/RoundFactory.php'); ?>
    <?php include_once('classes/HorseRace.php'); ?>
    <?php
        $db = get_db();

        $rfactory=new RoundFactory($db);
        //$currentId = $rfactory->getCurrentRound();
        $currentId = 1;
        //echo $currentId;
        //
        $hf = new HorseFactory($db);
        $race1 = $hf->getRaceHorses(1,$currentId);
        $race2 = $hf->getRaceHorses(2,$currentId);
        $race3 = $hf->getRaceHorses(3,$currentId);
        //
    ?>
    <div class="container contentBanner">
        <div class="">
            <h2 class="txt-ctr txt-underline marb-0">
                Race Day <?php echo $currentId ?>
            </h2>
            <form method="post" class="txt-ctr" action="sendData.php">
                <div class="race1">
                    <h4 class="txt-left marb-0 mart-20"> RACE 1 - ASCOT 13:50</h4>
                    <div>
                        <div class="w-33p fl-left pad-10">
                            <div class="center">
                                <div>
                                    <p class="fl-left jockey-gold fs-20">1st</p>
                                    <img src="img/jockeys/1stJockey.png" alt="" height="65" width="95" class="marb-5 fl-left">
                                </div>
                                <div class="clearfix"></div>
                                <div>
                                    <span class="fl-left fs-11"> Your selection: </span>
                                    <select id="race1first" name="race1first" class="cl-black" required>
                                        <option disabled selected value> -- Select a horse -- </option>
                                    <?php
                                        foreach ($race1 as $horse) {
                                            echo '<option value="'.$horse->linkId.'">'.$horse->horseName.'</option>';
                                        }
                                    ?>
                                    </select>
                                </div>    
                            </div>
                        </div>
                        <div class="w-33p fl-left pad-10">
                            <div class="center">
                                <div>
                                    <p class="fl-left jockey-silver fs-20">2nd</p>
                                    <img src="img/jockeys/2ndJockey.png" alt="" height="65" width="95" class="marb-5 fl-left">
                                </div>
                                <div class="clearfix"></div>
                                <div>
                                    <span class="fl-left fs-11"> Your selection: </span>
                                    <select id="race1second" name="race1second" class="cl-black" required>
                                        <option disabled selected value> -- Select a horse -- </option>
                                    <?php
                                        foreach ($race1 as $horse) {
                                            echo '<option value="'.$horse->linkId.'">'.$horse->horseName.'</option>';
                                        }
                                    ?>
                                    </select>
                                </div>    
                            </div>
                        </div>
                        <div class="w-33p fl-left pad-10">
                            <div class="center">
                                <div>
                                    <p class="fl-left jockey-bronze fs-20">3rd</p>
                                    <img src="img/jockeys/3rdJockey.png" alt="" height="65" width="95" class="marb-5 fl-left">
                                </div>
                                <div class="clearfix"></div>
                                <div>
                                    <span class="fl-left fs-11"> Your selection: </span>
                                    <select id="race1third" name="race1third" class="cl-black" required>
                                        <option disabled selected value> -- Select a horse -- </option>
                                    <?php
                                        foreach ($race1 as $horse) {
                                            echo '<option value="'.$horse->linkId.'">'.$horse->horseName.'</option>';
                                        }
                                    ?>
                                    </select>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="race2">
                    <h4 class="txt-left marb-0 mart-20"> RACE 2 - YORK 14:50</h4>
                    <div>
                        <div class="w-33p fl-left pad-10">
                            <div class="center">
                                <div>
                                    <p class="fl-left jockey-gold fs-20">1st</p>
                                    <img src="img/jockeys/1stJockey.png" alt="" height="65" width="95" class="marb-5 fl-left">
                                </div>
                                <div class="clearfix"></div>
                                <div>
                                    <span class="fl-left fs-11"> Your selection: </span>
                                    <select id="race2first" name="race2first" class="cl-black" required>
                                        <option disabled selected value> -- Select a horse -- </option>
                                    <?php
                                        foreach ($race2 as $horse) {
                                            echo '<option value="'.$horse->linkId.'">'.$horse->horseName.'</option>';
                                        }
                                    ?>
                                    </select>
                                </div>    
                            </div>
                        </div>
                        <div class="w-33p fl-left pad-10">
                            <div class="center">
                                <div>
                                    <p class="fl-left jockey-silver fs-20">2nd</p>
                                    <img src="img/jockeys/2ndJockey.png" alt="" height="65" width="95" class="marb-5 fl-left">
                                </div>
                                <div class="clearfix"></div>
                                <div>
                                    <span class="fl-left fs-11"> Your selection: </span>
                                    <select id="race2second" name="race2second" class="cl-black" required>
                                        <option disabled selected value> -- Select a horse -- </option>
                                    <?php
                                        foreach ($race2 as $horse) {
                                            echo '<option value="'.$horse->linkId.'">'.$horse->horseName.'</option>';
                                        }
                                    ?>
                                    </select>
                                </div>    
                            </div>
                        </div>
                        <div class="w-33p fl-left pad-10">
                            <div class="center">
                                <div>
                                    <p class="fl-left jockey-bronze fs-20">3rd</p>
                                    <img src="img/jockeys/3rdJockey.png" alt="" height="65" width="95" class="marb-5 fl-left">
                                </div>
                                <div class="clearfix"></div>
                                <div>
                                    <span class="fl-left fs-11"> Your selection: </span>
                                    <select id="race2third" name="race2third" class="cl-black" required>
                                        <option disabled selected value> -- Select a horse -- </option>
                                    <?php
                                        foreach ($race2 as $horse) {
                                            echo '<option value="'.$horse->linkId.'">'.$horse->horseName.'</option>';
                                        }
                                    ?>
                                    </select>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="race3">
                    <h4 class="txt-left marb-0 mart-20"> RACE 3 - NEWMARKET 17:20</h4>
                    <div>
                    <div class="w-33p fl-left pad-10">
                        <div class="center">
                            <div>
                                <p class="fl-left jockey-gold fs-20">1st</p>
                                <img src="img/jockeys/1stJockey.png" alt="" height="65" width="95" class="marb-5 fl-left">
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <span class="fl-left fs-11"> Your selection: </span>
                                <select id="race3first" name="race3first" class="cl-black" required>
                                    <option disabled selected value> -- Select a horse -- </option>
                                <?php
                                    foreach ($race3 as $horse) {
                                        echo '<option value="'.$horse->linkId.'">'.$horse->horseName.'</option>';
                                    }
                                ?>
                                </select>
                            </div>    
                        </div>
                    </div>
                    <div class="w-33p fl-left pad-10">
                        <div class="center">
                            <div>
                                <p class="fl-left jockey-silver fs-20">2nd</p>
                                <img src="img/jockeys/2ndJockey.png" alt="" height="65" width="95" class="marb-5 fl-left">
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <span class="fl-left fs-11"> Your selection: </span>
                                <select id="race3second" name="race3second" class="cl-black" required>
                                    <option disabled selected value> -- Select a horse -- </option>
                                <?php
                                    foreach ($race3 as $horse) {
                                        echo '<option value="'.$horse->linkId.'">'.$horse->horseName.'</option>';
                                    }
                                ?>
                                </select>
                            </div>    
                        </div>
                    </div>
                    <div class="w-33p fl-left pad-10">
                        <div class="center">
                            <div>
                                <p class="fl-left jockey-bronze fs-20">3rd</p>
                                <img src="img/jockeys/3rdJockey.png" alt="" height="65" width="95" class="marb-5 fl-left">
                            </div>
                            <div class="clearfix"></div>
                            <div>
                                <span class="fl-left fs-11"> Your selection: </span>
                                <select id="race3third" name="race3third" class="cl-black" required>
                                    <option disabled selected value> -- Select a horse -- </option>
                                <?php
                                    foreach ($race3 as $horse) {
                                        echo '<option value="'.$horse->linkId.'">'.$horse->horseName.'</option>';
                                    }
                                ?>
                                </select>
                            </div>    
                        </div>
                    </div>
                </div>
                </div>
                <div class="clearfix"></div>
                <div class="padt-50 ">
                    <input type="email" name="email" placeholder="Enter your email" class="bord-rd cl-black pad-10 h-34" required>
                    <input type="submit" value="Submit Predictions" class="cl-white btn btn-success">
                </div>
            </form>
        </div>
    </div>

    <?php include_once('includes/footer.inc.php'); ?>
</body>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/indexLogic.js"></script>
</html>
