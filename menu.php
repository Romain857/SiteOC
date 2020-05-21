<!--
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fa fa-home"></i>
          Home
          <span class="sr-only">(current)</span>
          </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-danger">11</span>
          </i>
          Link
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">
          <i class="fa fa-envelope-o">
            <span class="badge badge-warning">11</span>
          </i>
          Disabled
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-envelope-o">
            <span class="badge badge-primary">11</span>
          </i>
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
    </ul>
    <ul class="navbar-nav ">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-bell">
            <span class="badge badge-info">11</span>
          </i>
          Test
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fa fa-globe">
            <span class="badge badge-success">11</span>
          </i>
          Test
        </a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->

<?php
include_once "header.php";
mon_header("Menu");
?>

  <!-- sidebar-wrapper  -->
  <main class="page-content">
  
    <br><table class="table table-bordered table-hover" style="text-align:center">
    <tr>
        <th>Nom</th>
        <th>Nombre de saison</th>
        <th>Note</th>
        <th>Etat</th>
        <th>Avis</th>
    </tr>

    <a href="ajouterSerie.php" class="btn btn-primary">Ajouter une série</a>
    
    <?php
    require"config.php";
    $db = new PDO("mysql:host=".Config::SERVEUR.";dbname=".Config::BASEDEDONNEES
        ,Config::UTILISATEUR, Config::MOTDEPASSE);

    $r = $db->prepare("select * from serie");
    $r->execute();

    $resultats=$r->fetchAll();

    foreach ($resultats as $ligne) {
        ?>

        <tr>
            <td><?php echo $ligne["nom"] ?></td>
            <td><?php echo $ligne["nombreSaison"] ?></td>
            <td><strong><?php echo $ligne["note"] ?></strong> / 10</td>
            <td><?php echo color ("$ligne[etat]") ?></td> 
            <td><?php echo $ligne["avis"] ?></td>
        
            <td>
                <a href="modifSerie.php?id=<?php echo $ligne["id"] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>

                <a href="action/actionSupprSerie.php?id=<?php echo $ligne["id"] ?>"
                   onclick="return confirm('Etes-vous sur ?')"
                   class="btn btn-danger">
                    <i class="fa fa-recycle"></i>
                </a>

             </td>
             
             <td>
                <a href="visionne.php?id=<?php echo $ligne["id"] ?>" class="btn btn-outline-info link">
                <i class="fas fa-eye"></i>
                    Visionné ?
                </a>
            </td>
        </tr>

    <?php } ?>

    </table>   
  <!-- page-content" -->
 
                <a href="calcul.php?id=<?php echo $ligne["id"] ?>" class="btn btn-success link" style="float:right">
                    Calcul
                  <i class="fas fa-chart-pie"></i>
                </a>
           
</div>
<!-- page-wrapper -->

<?php

    function color($etat) {
        if($etat=="Vu") {
            echo "<button type=\"button\" class=\"btn btn-outline-success\">Vu <i class=\"fas fa-check-circle\"></i></button> ";

        } elseif ($etat=="En cours") {
            echo "<button type=\"button\" class=\"btn btn-outline-warning\">En cours <i class=\"fas fa-exclamation-triangle\"></i></button>";

        }elseif ($etat=="Pas vu"){
          echo "<button type=\"button\" class=\"btn btn-outline-danger\">Pas vu <i class=\"fas fa-exclamation-circle\"></i></button>";
        }
    }

    ?>

<?php
include_once "footer.php";
mon_footer();
?>
