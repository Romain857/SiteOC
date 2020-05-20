<?php
$id=filter_input(INPUT_POST, "id");
$nom=filter_input(INPUT_POST, "nom");
$mdp=filter_input(INPUT_POST,"mdp");
$email=filter_input(INPUT_POST, "email");
$numTel=filter_input(INPUT_POST, "numTel");

require_once "../config.php";

$db = new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES,
    config::UTILISATEUR,config::MOTDEPASSE);


$r=$db->prepare("update utilisateur set nom=:nom, mdp=:mdp, email=:email, numTel=:numTel where id=:id");

$r->bindParam(":id",$id);
$r->bindParam(":nom",$nom);
$r->bindParam(":mdp",$mdp);
$r->bindParam(":email",$email);
$r->bindParam(":numTel",$numTel);

$r->execute();

header('location: ../indexUser.php');
