
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Horse to Database</title>
  </head>
  <body>
    <h1>Add Horse to Database</h1>
    <form action="/addHorse.php">
      Horse Name: <input  type="text" name="HorseName" value="" id="x">

      <button type="button" onclick=addHorseToArray()>+</button>
      <ul id="list">
      </ul>
      <br>
      <input type="submit" value="Submit">
    </form>
  </body>
  <script src="adminHorseJS.js"></script>
</html>
