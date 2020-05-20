<?php
include_once "header.php";
mon_header("modifUser.php");
?>

<main class="container">
    <h1>Modifier les informations de l'utilisateur</h1>

<?php
$id=filter_input(INPUT_GET,"id");
require "config.php";
$db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES
    ,Config::UTILISATEUR, Config::MOTDEPASSE);

$r = $db->prepare("select * from utilisateur where id=:id");
$r->bindParam(":id",$id);
$r->execute();

$resultats=$r->fetchAll();

foreach ($resultats as $ligne){
    ?>
    <?php
}
?>
        <form method="post" action="action/actionModifUser.php">
            <input type="hidden" name="id" value="<?php echo $id?>">

            <br><div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" maxlength="50"
                       name="nom" value="<?php echo $resultats["0"]["nom"]?>"
                       placeholder="Nom..." required>
            </div>

            <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="text" class="form-control" id="mdp" maxlength="50"
                       name="mdp" value="<?php echo $resultats["0"]["mdp"]?> "
                       placeholder="Mot de passe..." required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email"
                       name="email" value="<?php echo $resultats["0"]["email"]?>"
                       placeholder="Email...">
            </div>

            <div class="form-group">
                <label for="numTel">Etat</label>
                <input type="text" class="form-control" id="numTel"
                       name="numTel" value="<?php echo $resultats["0"]["numTel"]?>"
                       placeholder="Numero de tel...">
            </div>

            <a href="indexUser.php" class="btn btn-danger pull-left">
                <i class="fal fa-long-arrow-left"></i>
                Retour
            </a>
            <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
        </form>
