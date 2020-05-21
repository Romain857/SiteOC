<?php
$id=filter_input(INPUT_POST, "id");
$nom=filter_input(INPUT_POST, "nom");
$nombreSaison=filter_input(INPUT_POST,"nombreSaison");
$note=filter_input(INPUT_POST, "note");
$etat=filter_input(INPUT_POST, "etat");
$avis=filter_input(INPUT_POST, "avis");

require_once "../config.php";

$db = new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES,
    config::UTILISATEUR,config::MOTDEPASSE);


$r=$db->prepare("insert into serie (id, nom, nombreSaison, note, etat, avis) values ( :id, :nom, :nombreSaison, :note, :etat, :avis)");

$r->bindParam(":id",$id);
$r->bindParam(":nom",$nom);
$r->bindParam(":nombreSaison",$nombreSaison);
$r->bindParam(":note",$note);
$r->bindParam(":etat",$etat);
$r->bindParam(":avis",$avis);

$r->execute();

header('location: ../menu.php');
