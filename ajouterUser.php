<?php
include_once "header.php";
mon_header("ajouterUser");
?>

<<main class="container">
    <h1>Ajouter un Utilisateur</h1>

    <form method="post" action="action/actionAjouterUser.php">

        <br><div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" maxlength="50"
                   name="nom"
                   placeholder="Nom..." required>
        </div>

        <div class="form-group">
                <label for="mdp">Mot de passe</label>
                <input type="text" class="form-control" id="mdp" maxlength="50"
                       name="mdp" 
                       placeholder="Mot de passe..." required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email"
                       name="email" 
                       placeholder="Email...">
            </div>

            <div class="form-group">
                <label for="numTel">Etat</label>
                <input type="text" class="form-control" id="numTel"
                       name="numTel" 
                       placeholder="Numero de tel...">
            </div>

        <a href="indexUser.php" class="btn btn-danger pull-left">
            <i class="fal fa-long-arrow-left"></i>
            Retour
        </a>
        <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
    </form>
