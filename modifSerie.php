<?php
include_once "header.php";
mon_header("modifSerie.php");
?>

<main class="container">
    <h1>Modifier les informations de la série</h1>

<?php
$id=filter_input(INPUT_GET,"id");
require "config.php";
$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES
    ,Config::UTILISATEUR, Config::MOTDEPASSE);

$r = $db->prepare("select * from serie where id=:id");
$r->bindParam(":id",$id);
$r->execute();

$resultats=$r->fetchAll();

foreach ($resultats as $ligne){
    ?>
    <?php
}
?>
        <form method="post" action="action/actionModifSerie.php">
            <input type="hidden" name="id" value="<?php echo $id?>">

            <br><div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" maxlength="50"
                       name="nom" value="<?php echo $resultats["0"]["nom"]?>"
                       placeholder="Nom..." required>
            </div>

            <div class="form-group">
                <label for="nombreSaison">Nombre de Saison</label>
                <input type="nombre" class="form-control" id="nombreSaison" maxlength="50"
                       name="nombreSaison" value="<?php echo $resultats["0"]["nombreSaison"]?> "
                       placeholder="Nombre de Saison..." required>
            </div>

            <div class="form-group">
                <label for="etat">Etat</label>
                <input type="text" class="form-control" id="etat"
                       name="etat" value="<?php echo $resultats["0"]["etat"]?>"
                       placeholder="Etat...">
            </div>

            <a href="menu.php" class="btn btn-danger pull-left">
                <i class="fal fa-long-arrow-left"></i>
                Retour
            </a>
            <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
        </form>
