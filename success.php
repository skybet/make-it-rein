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

    <div class="container contentBanner">
        <div class="mart-10p">
            <div class="txt-ctr">
                <h1>Your prediction has been successfully saved!</h1>
                <h4>A confirmation email of your prediction has been sent to you.</h4>
                <h2>The winner will be contacted via the email address provided.<br>Good luck with your prediction!</h2>
                <i class="fa fa-check fa-5x cl-success" aria-hidden="true"></i>
            </div>

            <!-- <form method="post" class="txt-ctr" action="calcResults.php">
              <input type="email" name="email" placeholder="Enter your email" class="bord-rd cl-black pad-10 h-34">
              <input type="submit" value="Check my Predictions" class="cl-white btn btn-success">
            </form> -->
        </div>
        <div class="mart-10p">
            <p class="txt-ctr txt-underline">
                This page will redirect back to the homepage in <span id="countDown"></span>
            </p>
        </div>   
    </div>

    <?php include_once('includes/footer.inc.php'); ?>

</body>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/success.js"></script>
</html>
