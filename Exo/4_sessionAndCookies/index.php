<?php

    setcookie('pays', 'France', time() + 365*24*3600, null, null, false, true);

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Global variables</title>
  </head>
  <body>
      <?php
      echo '$_SERVER["REMOTE_ADDR"]';
      var_dump($_SERVER['REMOTE_ADDR']);

      echo '$_SERVER["SERVER_SOFTWARE"]';
      var_dump($_SERVER['SERVER_SOFTWARE']);

      echo '$_SERVER["SERVER_NAME"]';
      var_dump($_SERVER['SERVER_NAME']);

      echo $_COOKIE['pays'];

       ?>
  </body>
</html>
