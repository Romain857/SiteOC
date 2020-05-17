<main class="contrainer"></main>
<table class="table">
        <tr>
            <th>Code a entrer pour acceder à la zone :</th>
        </tr>

    </table>

    <form method="post" action="">
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

<tr>
    <th>nom</th>
    <th>mdp</th>
</tr>

<?php
    require"config.php";
    $db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES
        ,Config::UTILISATEUR, Config::MOTDEPASSE);

    $r = $db->prepare("select * from utilisateur where id=:id");

    $r->execute();
    $resultats=$r->fetchAll();

    foreach ($resultats as $ligne){
        ?>

<tr>
    <th><?php echo $ligne[nom]?></th>
    <th><?php echo $ligne[mdp]?></th>
</tr>

<button type="submit" class="btn btn-success">Enregistrer</button>

    </form>