<!-- permet de connecter la bdd au site internet  -->
<?php
$host = "127.0.0.1";
$user = "root"; // identifiant de phpmyadmin
$pass = "root"; // mdp de phpmyadmin
$db = "jpo2024"; // nom de la base de donnée utilisé 


$conn = new mysqli($host, $user, $pass, $db);
$conn->set_charset("utf8");

if ($conn->connect_error){ // si la connexion à une erreur on affiche le message suivant :
    die("Echec de la connexion à la base de donnée :".$conn->connect_error);
}
?>