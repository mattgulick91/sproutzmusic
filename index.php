<?php
session_start();
 ?>
<?php include_once "php/databaseConnection.php" ?>
<?php include_once "php/getTableArray.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sproutz Test</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.2.1-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" type="text/css" href="./css/master.css">
    <link rel="stylesheet" href="./css/master.css">
  </head>
  <body>

    <?php include "./components/nav.php" ?>
    <?php include "./components/landing.php" ?>
    <?php include "./components/about.html" ?>
    <?php include "./components/socials.html" ?>

    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="bootstrap-4.2.1-dist/js/bootstrap.min.js"></script>
    <script src="./js/scripts.js"></script>
  </body>
</html>
