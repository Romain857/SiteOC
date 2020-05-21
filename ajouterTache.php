<?php
include_once "header.php";
mon_header("ajouterUser");
?>

<<main class="container">
    <h1>Ajouter une Tâche</h1>

    <form method="post" action="action/actionAjouterTache.php">

        <br><div class="form-group">
            <label for="jour">Jour</label>
            <input type="date" class="form-control" id="jour" maxlength="50"
                   name="jour"
                   placeholder="Jour..." required>
        </div>

        <div class="form-group">
                <label for="tache">Tache</label>
                <input type="text" class="form-control" id="tache" maxlength="50"
                       name="tache" 
                       placeholder="Tâche..." required>
            </div>

            <div class="form-group">
            <label for="etat">Etat</label><i> (Vu, En cours, Pas vu)</i>
            <input type="text" class="form-control" id="etat"
                   name="etat"
                   placeholder="Etat..." required>
        </div>

        <a href="calendrier.php" class="btn btn-danger pull-left">
            <i class="fal fa-long-arrow-left"></i>
            Retour
        </a>
        <button type="submit" class="btn btn-primary pull-right">Enregistrer</button>
    </form>
