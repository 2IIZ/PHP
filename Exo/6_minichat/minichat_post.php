<?php

$pseudo = $_POST['pseudo'];
$message = $_POST['message'];

$date = getdate();

setcookie('pseudo', $pseudo, time() + 24*30*3600, null, null, false, true);

// var_dump($date);

$hours = $date['hours'];
$minutes = $date['minutes'];
$seconds = $date['seconds'];

$hours += 2; //GMT

// $dateFormated = "$hours:$minutes:$seconds";

try {

  $pdo = new PDO('mysql:host=localhost; dbname=minichat;', 'root', '');

} catch (\Exception $e) {
    die('Erreur :'.$e->getMessage());
}

$insert = $pdo->prepare("INSERT INTO `user`(`pseudo`, `message`, `date`) VALUES (?, ?, ?)");

$insert->execute(array($pseudo, $message, $dateFormated));

header('Location: minichat.php')
 ?>
