<?php
$id=filter_input(INPUT_POST, "id");
$jour=filter_input(INPUT_POST, "jour");
$tache=filter_input(INPUT_POST,"tache");
$etat=filter_input(INPUT_POST, "etat");

require_once "../config.php";

$db = new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES,
    config::UTILISATEUR,config::MOTDEPASSE);


$r=$db->prepare("insert into calendrier (id, jour, tache, etat) values ( :id, :jour, :tache, :etat)");

$r->bindParam(":id",$id);
$r->bindParam(":jour",$jour);
$r->bindParam(":tache",$tache);
$r->bindParam(":etat",$etat);

$r->execute();
//$r->debugDumpParams();
header('location: ../calendrier.php');
