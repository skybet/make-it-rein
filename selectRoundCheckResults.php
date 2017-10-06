<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Round Results</title>
    <link rel="stylesheet" type="text/css" href="<?php echo 'css/bootstrap/bootstrap.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo 'css/fontAwesome/css/font-awesome.min.css'?>"/>
    <link rel="stylesheet" type="text/css" href="<?php echo 'css/rein.css'?>"/>
    <link rel="icon" href="<?php echo '../img/favicon.ico'?>" type="image/x-icon">
</head>
<body>
    <?php include_once('includes/productHeader.inc.php'); ?>
    <?php include_once('includes/navBar.inc.php'); ?>


    <div class="container">
      <div>
      <h1>Check Winners for Round</h1>  
      <h4>Select Round:</h4>
            <form action="calcResultsMass.php" method="post">

            <select name="roundNum" class="cl-black">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>

            </select>
            <input type="submit" value="Select" class="cl-black">

      </div>
    </div>

</form>


<br><br><br><br><br><br><br>
<?php include_once('includes/footer.inc.php'); ?>
</body>
<script src="<?php echo 'js/jquery-3.2.1.min.js'?>"> </script>
<script src="<?php echo 'js/admin-logic.js'?>"> </script>
</html>

