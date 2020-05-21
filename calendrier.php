<?php
include_once "header.php";
mon_header("calendrier");
?>

  <!-- sidebar-wrapper  -->
  <main class="page-content">
  
    <br><table class="table table-bordered table-hover" style="text-align:center">
    <tr>
        <th>Jour</th>
        <th>Tache</th>
        <th>Etat</th>
    </tr>

    <a href="ajouterTache.php" class="btn btn-primary">Ajouter une Tache</a>
    
    <?php
    require"config.php";
    $db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES
        ,Config::UTILISATEUR, Config::MOTDEPASSE);

    $r = $db->prepare("select * from calendrier");
    $r->execute();

    $resultats=$r->fetchAll();

    foreach ($resultats as $ligne) {
        ?>

        <tr>
            <td><strong><?php echo $ligne["jour"] ?></td>
            <td><?php echo $ligne["tache"] ?></td>
            <td><?php echo color ("$ligne[etat]") ?></td> 
        
            <td>
                <a href="modifTache.php?id=<?php echo $ligne["id"] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                <a href="action/actionSupprTache.php?id=<?php echo $ligne["id"] ?>"
                   onclick="return confirm('Etes-vous sur ?')"
                   class="btn btn-danger">
                    <i class="fa fa-recycle"></i>
                </a>

             </td>
             
             <td>
                <a href="effectue.php?id=<?php echo $ligne["id"] ?>" class="btn btn-outline-info link">
                <i class="fas fa-eye"></i>
                    Effectué ?
                </a>
            </td>
        </tr>

    <?php } ?>

    </table>   
  <!-- page-content" -->
           
</div>
<!-- page-wrapper -->

<?php

    function color($etat) {
        if($etat=="Fait") {
            echo "<button type=\"button\" class=\"btn btn-outline-success\">Fait <i class=\"fas fa-check-circle\"></i></button> ";

        } elseif ($etat=="En cours") {
            echo "<button type=\"button\" class=\"btn btn-outline-warning\">En cours <i class=\"fas fa-exclamation-triangle\"></i></button>";

        }elseif ($etat=="Pas fait"){
          echo "<button type=\"button\" class=\"btn btn-outline-danger\">Pas fait <i class=\"fas fa-exclamation-circle\"></i></button>";
        }
    }

    ?>