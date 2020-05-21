<?php
include_once "header.php";
mon_header("Menu");
?>

<main class="page-content">
    <h1><a href="#" class="text-decoration-none">
            <h1>Profil de l'Admin / Développeur</h1><br>
        </a>
    </h1>
    <table class="table">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">MotDePasse</th>
            <th scope="col">email</th>
            <th scope="col">NumeroTel</th>
        </tr>

    <?php
    require "config.php";
    $db = new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES, config::UTILISATEUR, config::MOTDEPASSE);
    $r = $db->prepare("select * from utilisateur where id=1");
    $r->execute();
    $resultats=$r->fetchALL();



    foreach ($resultats as $ligne){
        ?>
        <tr>
            <td><?php echo $ligne["nom"] ?></td>
            <td><?php echo $ligne["mdp"] ?></td>
            <td><?php echo $ligne["email"] ?></td>
            <td><?php echo $ligne["numTel"] ?></td>
            <td>

            <a href="modifUser.php?id=<?php echo $ligne["id"] ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>

            </td>
        </tr>
        <?php
    }

    ?>
    </table>

    <?php
include_once "footer.php";
mon_footer();
?>
