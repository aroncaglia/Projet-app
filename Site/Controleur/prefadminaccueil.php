<?php
session_start();

require '../Modele/modeleprefadminaccueil.php';

if(isset($_SESSION['id'])) {
    $requser = $bdd->prepare("SELECT * FROM info_domisep ");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();
    if (isset($_POST['newpres']) AND !empty($_POST['newpres']) AND $_POST['newpres'] != $user['Présentation']) {
        $newpres = htmlspecialchars($_POST['newpres']);
        $insertcgu = $bdd->prepare("UPDATE info_domisep SET Presentation = ?");
        $insertcgu->execute(array($newpres));
        header('Location: ../Vue/editoptionreussie.php');
    }

    else {
        $msg = "Le champs doit être complété .";
    }

    ?>

    <?php
}
else {
    header("Location: ../Controleur/connexadmin.php");
}

require '../Vue/vueprefadminaccueil.php';

?>