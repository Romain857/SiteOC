<?php
include_once "header.php";
mon_header("Menu");
?>

<main class="page-content">
    <h1><a href="#" class="text-decoration-none">
            <p class="font-italic">Listes des utilisateur</p>
        </a>
    </h1>
    <table class="table">
        <tr>
            <th scope="col">Nom</th>
            <th scope="col">MotDePasse</th>
            <th scope="col">email</th>
            <th scope="col">NumeroTel</th>
        </tr>
        <a href="ajouterUser.php" class="btn btn-success">Ajouter un utilisateur</a>
    <?php
    require "config.php";
    $db = new PDO("mysql:host=".config::SERVEUR.";dbname=".config::BASEDEDONNEES, config::UTILISATEUR, config::MOTDEPASSE);
    $r = $db->prepare("select * from utilisateur");
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

                <a href="action/actionSupprUser.php?id=<?php echo $ligne["id"] ?>"
                   onclick="return confirm('Etes-vous sur ?')"
                   class="btn btn-danger">
                    <i class="fa fa-recycle"></i>
                </a>
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
