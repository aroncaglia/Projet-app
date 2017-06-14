<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Vue/CssSite1.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<meta charset="UTF-8">
<body>

<ul class="horinav">
    <li><a href="../Vue/Accueil.php">Home</a></li>
    <li><a class="active" href="../Controleur/Fonctio.php">Mes Fontionnalitées</a></li>
    <li><a href="../Vue/Camera.php">Mes Pièces</a></li>
    <li><a href="../Vue/about.php">About</a></li>
    <li><a href="../Controleur/editionprofil.php">Editer mon profil</a></li>
    <li><a href="../Modele/deconnexion.php">Se deconnecter</a></li>
</ul>

<div class="content">
    <a class="logo"><img src="../Vue/contenu/Logo_domisep.jpg" alt="Logo" width="63" height="61"/></a>
    <h1 class="double">Vos Fonctionnalitées</h1>
</div>
<div class="content">
    <div class="general">
        <div class="information">
            <a href="../Controleur/capteur.php"/> <input type="submit" class ="bouton18" name="modifcapt" value="Vos capteurs" />

        </div>

        <div class="information1">
            <a href="../Controleur/Actionneurs.php"/> <input type="submit" class ="bouton18" name="modifactio" value="Vos actionneurs" />

        </div>

        <div class="information1">
            <a href="../Controleur/Camera.php" />   <input type="submit" class ="bouton18" name="modifcam" value=" Vos caméras" />

        </div>
    </div>
</div>

</body>

<div class="footer">
    <p>Copyright : B-Creative</p>
</div>


</html>