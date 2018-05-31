<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../main.css">
  </head>
  <body>
    <?php

      //Tableaux multidimensionnels

    $inscrits = array(
                'Jax' => array("Numero" => 1,"Phrase" => ""),
                'Ivan' => array("Numero" => 2,"Phrase" => "What we fear doing most is usually what we most need to do"),
                'Matt' => array("Numero" => 3,"Phrase" => "On the other side of fear, are all the best things in life")
                );

                var_dump($inscrits); // seeing the table


    echo "<table>";
    echo "<tr>";
    echo "<th> Name </th>";
    echo "<th> Favorite Number </th>";
    echo "<th> Favorite Phrase </th>";
    echo "</tr>";

    foreach ($inscrits as $key => $value) {
      echo "<td> $key </td>";
      foreach ($value as $key => $value) {
        echo "<tr><td> $key</td>";
        echo "<td> $value</td></tr>";
      }

    }

    echo "</table>";

    echo "<pre>";
    print_r($inscrits);
    echo "</pre>";

    ?>
  </body>
</html>
