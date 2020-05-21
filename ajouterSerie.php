<?php
include_once "header.php";
mon_header("ajouterSerie");
?>

<<main class="container">
    <h1>Ajouter une série</h1>

    <form method="post" action="action/actionAjouterSerie.php">

        <br><div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" maxlength="50"
                   name="nom"
                   placeholder="Nom..." required>
        </div>

        <div class="form-group">
            <label for="nombreSaison">Nombre de Saison</label>
            <input type="nombre" class="form-control" id="nombreSaison" maxlength="50"
                   name="nombreSaison"
                   placeholder="Nombre de Saison..." required>
        </div>

        <div class="form-group">
            <label for="note">Note</label>
            <input type="text" class="form-control" id="note"
                   name="note"
                   placeholder="Note..." required>
        </div>

        <div class="form-group">
            <label for="etat">Etat</label><i> (Vu, En cours, Pas vu)</i>
            <input type="text" class="form-control" id="etat"
                   name="etat"
                   placeholder="Etat..." required>
        </div>

        <div class="form-group">
            <label for="avis">Avis</label>
            <input type="text" class="form-control" id="avis"
                   name="avis"
                   placeholder="Votre avis..." required>
        </div>

        <a href="menu.php" class="btn btn-danger pull-left">
            <i class="fal fa-long-arrow-left"></i>
            Retour
        </a>
        <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
    </form>
