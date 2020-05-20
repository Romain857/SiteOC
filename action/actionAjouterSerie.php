<?php
$id=filter_input(INPUT_POST, "id");
$nom=filter_input(INPUT_POST, "nom");
$nombreSaison=filter_input(INPUT_POST,"nombreSaison");
$note=filter_input(INPUT_POST, "note");
$etat=filter_input(INPUT_POST, "etat");

require_once "../config.php";

$db = new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES,
    config::UTILISATEUR,config::MOTDEPASSE);


$r=$db->prepare("insert into serie (id, nom, nombreSaison, note, etat) values ( :id, :nom, :nombreSaison, :note, :etat)");

$r->bindParam(":id",$id);
$r->bindParam(":nom",$nom);
$r->bindParam(":nombreSaison",$nombreSaison);
$r->bindParam(":note",$note);
$r->bindParam(":etat",$etat);

$r->execute();

header('location: ../menu.php');
