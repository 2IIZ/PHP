<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

    $notes = array('Jax' => 11,
                   'Ivan' => 12,
                   'Matt' => 13);

    $notes['Karim'] = 14;

    echo "<table>";
    echo "<tr>";
    echo "<th> Nom </th>";
    echo "<th> Notes </th>";
    echo "</tr>";
    foreach ($notes as $key => $value) {
      echo "<tr><td> $key</td>";
      echo "<td> $value</td></tr>";

    }



    echo "</table>";
    ?>
  </body>
</html>
