<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <button type="button" name="button"><a href="">Update page</a></button> <br><br>

    <form class="" action="minichat_post.php" method="post">
      <input type="text" name="pseudo" value="<?php if (isset($_COOKIE['pseudo'])) {echo $_COOKIE['pseudo'];}?>"placeholder="Pseudo">
      <input type="textbox" name="message" placeholder="Message">
      <input type="submit" value="Go">
    </form>

    <?php
    try {

      $pdo = new PDO('mysql:host=localhost; dbname=minichat;', 'root', '');

    } catch (\Exception $e) {
        die('Erreur :'.$e->getMessage());
    }

    $select = $pdo->query("SELECT `pseudo`, `message` FROM `user` ORDER BY ID DESC LIMIT 0, 10");

    while ($data = $select->fetch()) {
      echo '<p><strong>' . htmlspecialchars($data['pseudo']) . '</strong>  : ' .
      htmlspecialchars($data['message']) . '</p>';
    }

    var_dump(time());

    $select->closeCursor();
    ?>


  </body>
</html>
