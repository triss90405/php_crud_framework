<?php include("app.php"); $app = new MyApp; ?>

<!DOCTYPE html>
<html lang="da">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PHP CRUD APP</title>
  </head>
  <body>

    <!-- Get data example -->
    <?php foreach($app->DatabasePrepareQuery("SELECT * FROM Library", array()) as $books) {
      echo $books['title'] . "<br>";
    } ?>

  </body>
</html>
