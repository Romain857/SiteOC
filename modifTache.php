<?php
include_once "header.php";
mon_header("modifSerie.php");
?>

<main class="container">
    <h1>Modifier les informations de cette Tâche</h1>

<?php
$id=filter_input(INPUT_GET,"id");
require "config.php";
$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES
    ,Config::UTILISATEUR, Config::MOTDEPASSE);

$r = $db->prepare("select * from calendrier where id=:id");
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

            <br><div class="form-group">
                <label for="jour">Jour</label>
                <input type="date" class="form-control" id="jour" maxlength="50"
                       name="jour" value="<?php echo $resultats["0"]["jour"]?>"
                       placeholder="Jour..." required>
            </div>

            <div class="form-group">
                <label for="tache">Tâche</label>
                <input type="text" class="form-control" id="tache" maxlength="50"
                       name="tache" value="<?php echo $resultats["0"]["tache"]?> "
                       placeholder="Têche..." required>
            </div>

            <div class="form-group">
                <label for="etat">Etat</label><i> (Vu, En cours, Pas vu)</i>
                <input type="text" class="form-control" id="etat"
                       name="etat" value="<?php echo $resultats["0"]["etat"]?>"
                       placeholder="Etat...">
            </div>

            <a href="calendrier.php" class="btn btn-danger pull-left">
                <i class="fal fa-long-arrow-left"></i>
                Retour
            </a>
            <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
        </form>
