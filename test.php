<?php echo'hello world' ?>

<main class="container">
<table class="table table-bordered table-hover">
    <tr>
        <th>Nom</th>
        <th>mot de passe</th>
    </tr>

    <div class="form-group">
            <label for="nom">nom</label>
            <input type="text" class="form-control" id="nom" maxlength="50"
                   name="nom"
                   placeholder="Nom..." required>
        </div>

        <div class="form-group">
            <label for="mdp">mot de passe</label>
            <input type="text" class="form-control" id="mdp" maxlength="50"
                   name="mdp"
                   placeholder="Mot de passe..." required>
        </div>
            <?php
    require"config.php";
    $db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES
        ,Config::UTILISATEUR, Config::MOTDEPASSE);

    $r = $db->prepare("select * from utilisateur");
    $r->execute();

    $resultats=$r->fetchAll();

    foreach ($resultats as $ligne) {
        ?>

        <tr>
            <td><?php echo $ligne["nom"] ?></td>
            <td><?php echo $ligne["mdp"] ?></td>
        </tr>

    <?Php } ?>