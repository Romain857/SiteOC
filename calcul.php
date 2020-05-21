<?php
include_once "header.php";
mon_header("calcul");
?>

<<main class="container">
<h1><a href="#" class="text-decoration-none">
    <h1>Votre suivis</h1><br>
    </a>
</h1>
    <table class="table table-hover" style="text-align:center">
        <thead>
            <tr>
                <th>Les série regardées</th>
                <th>Nombre de Série regardées</th>
                <th>Nombre de saison regardées</th>
                <th>Avis moyen</th>
            </tr>


    <?php
    require"config.php";
    $db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES
        ,Config::UTILISATEUR, Config::MOTDEPASSE);

        $r = $db->prepare("select * from serie");

        $r->execute();
        $resultats=$r->fetchAll();

        $a = $db->prepare("select count(nom) from serie");
        $a->execute();
        $resultats2=$a->fetchAll();

        $b = $db->prepare("select sum(nombreSaison) from serie");
        $b->execute();
        $resultats3=$b->fetchAll();

        $c = $db->prepare("select sum(note) from serie");
        $c->execute();
        $resultats4=$c->fetchAll();

    foreach ($resultats as $ligne) {
    ?>
        <tr>
            <th><?php echo $ligne["nom"] ?></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>

        <?php
        }
    ?>
        <tr>
            <th></th>
            <th><?php echo $resultats2[0]["count(nom)"]?></th>
            <th><?php echo $resultats3[0]["sum(nombreSaison)"]?></th>
            <th><?php echo $resultats4[0]["sum(note)"] / $resultats2[0]["count(nom)"]?></th>
        </tr>
        </thead>
        </table>

        <a href="menu.php" class="btn btn-danger pull-left">
            <i class="fal fa-long-arrow-left"></i>
            Retour
        </a>

