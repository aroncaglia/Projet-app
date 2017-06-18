<?php
session_start();

require '../Modele/modeleprefadmincgu.php';

if(isset($_SESSION['id'])) {
    $requser = $bdd->prepare("SELECT * FROM info_domisep ");
    $requser->execute(array($_SESSION['id']));
    $user = $requser->fetch();
    if (isset($_POST['newcgu']) AND !empty($_POST['newcgu']) AND $_POST['newcgu'] != $user['CGU']) {
        $newcgu = htmlspecialchars($_POST['newcgu']);
        $insertcgu = $bdd->prepare("UPDATE info_domisep SET CGU = ?");
        $insertcgu->execute(array($newcgu));
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

require '../Vue/vueprefadmincgu.php';

?>