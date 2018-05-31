<?php

$myFile = fopen('file.txt', 'a+');

$ligne = fgets($myFile);

fputs($myFile, "hola que tal ? ");

echo $ligne;

fclose($myFile);

 ?>
