<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tracker</title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

</head>
<body>

  <?php
  function get_db()
  {
      $host ='127.0.0.1';
      $db = 'MakeItRein';
      $userdb = 'user1';
      $pass = 'mypass';

      $dsn = "mysql:host=$host; dbname=$db";
      $pdo = new PDO($dsn, $userdb, $pass);
      return $pdo;
  }

$userid = 1;
$ip = $_SERVER['REMOTE_ADDR'];
$browserinfo = $_SERVER['HTTP_USER_AGENT'];

echo "details saved in DB";
  $date = new DateTime();
  $datetimeaccessed = date('Y-m-d H:i:s', time() + 3600);

  $pdo = get_db();

  $r = $pdo->prepare("
  INSERT INTO MakeItRein.UserInteraction (UserId, datetimeaccessed, ip, browserinfo)
  VALUES (:userid, :datetimeaccessed, :ip, :browserinfo)");

  $r->execute(array(
    ':userid' => $userid,
    ':datetimeaccessed' => $datetimeaccessed,
    ':ip' => $ip,
    ':browserinfo' => $browserinfo ));



   ?>
   <script>


   </script>
</body>
</html>
