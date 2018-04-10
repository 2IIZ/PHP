<?php

$server = "localhost";
$dbname = "manger";
$user ='root';
$pass ='';

$valeur= filter_input_array(INPUT_POST);
var_dump($valeur);

 $name=$_POST['name'];
 $email=$_POST['email'];
 $pseudo=$_POST['pseudo'];
 $password=$_POST['password'];


try {
    $conn = new PDO("mysql:host=$server;dbname=$dbname", $user, $pass);
    echo "Connected Successfully ";

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //insert data
    $addUser = "INSERT INTO utilisateur (nom_utilisteur, mdp_utilisateur, pseudo_utilisateur, email_utilisateur)
    VALUES ('$name', '$password', '$pseudo', '$email')";
    // use exec() because no results are returned
    $conn->exec($addUser);
    echo "<br>New record created successfully";


} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

?>
