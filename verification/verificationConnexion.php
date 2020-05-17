<?php
require_once "../config.php";

$nom=filter_input(INPUT_POST, "nom");
$mdp=filter_input(INPUT_POST,"mdp");

$db = new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES,
    config::UTILISATEUR,config::MOTDEPASSE);


$r = $db->prepare("select * from utilisateur");


$r->execute();
$resultats=$r->fetchAll();

$error=0;
foreach ($resultats as $ligne){
    if($nom==$ligne['nom'] and $mdp==$ligne['mdp'] ){
        $error=1;
        $id=$ligne['id'];
    }
}

if ($error==0){
    header('location: ../connexion.html?error='.$error);
}else{
    header('location: ../index.html');

}

?>
