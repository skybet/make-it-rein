var countDown = 30;

setInterval(function() {
    if (countDown === 0) {
        window.location = "index.php";
    }
    $('#countDown').text(countDown);
    countDown -= 1;
}, 1000);