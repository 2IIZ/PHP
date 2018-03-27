<?php

$server ='localhost';
$login ='root';
$pass ='';
$bddName='mlr1';

$valeur= filter_input_array(INPUT_POST);
var_dump($valeur);

try {
    $dbh = new PDO('mysql:host='.$server.';dbname='.$bddName., $login, $pass);
    foreach($dbh->query('SELECT * from recettes') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$req = $bdd->prepare('INSERT INTO utilisateur(nom_utilisateur, mdp_utilisateur, pseudo_utilisateur, email_utilisateur)
VALUES(:nom_utilisateur, :mdp_utilisateur, :pseudo_utilisateur, :email_utilisateur)')
or exit(print_r($bdd->errorInfo()));

?>
