<?php
include_once "header.php";
mon_header("effectueTache");
?>

<<main class="container">
    <h1>Mise à jour</h1>

    <?php
$id=filter_input(INPUT_GET,"id");
require "config.php";
$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES
    ,Config::UTILISATEUR, Config::MOTDEPASSE);

$r = $db->prepare("select etat from calendrier where id=:id");
$r->bindParam(":id",$id);
$r->execute();

$resultats=$r->fetchAll();

foreach ($resultats as $ligne){
    ?>
    <?php
}
?>

    <form method="post" action="action/actionModifTache.php">
    <input type="hidden" name="id" value="<?php echo $id?>">


        <div class="form-group">
            <label for="etat">Etat</label><i> (Vu, En cours, Pas vu)</i>
            <input type="text" class="form-control" id="etat"
                   name="etat" value="<?php echo $resultats["0"]["etat"]?>"
                   placeholder="Etat..." required>
        </div>

        <a href="calendrier.php" class="btn btn-danger pull-left">
            <i class="fal fa-long-arrow-left"></i>
            Retour
        </a>
        <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
    </form>
