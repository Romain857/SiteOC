<?php
$id=filter_input(INPUT_POST, "id");
$nom=filter_input(INPUT_POST, "nom");
$nombreSaison=filter_input(INPUT_POST,"nombreSaison");
$etat=filter_input(INPUT_POST, "etat");

require_once "../config.php";

$db = new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES,
    config::UTILISATEUR,config::MOTDEPASSE);


$r=$db->prepare("update serie set nom=:nom, nombreSaison=:nombreSaison, etat=:etat where id=:id");

$r->bindParam(":id",$id);
$r->bindParam(":nom",$nom);
$r->bindParam(":nombreSaison",$nombreSaison);
$r->bindParam(":etat",$etat);

$r->execute();
//$r->debugDumpParams();

header('location: ../menu.php');
