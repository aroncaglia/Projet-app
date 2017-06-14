<?php
session_start();
?>




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Vue/CssSite1.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capteurs</title>

</head>
<meta charset="UTF-8">
<body>

<ul class="horinav">
    <li><a href="../Vue/Accueil.php">Home</a></li>
    <li><a href="../Controleur/Fonctio.php">Mes Fontionnalitées</a></li>
    <li><a href="../Vue/Camera.php">Mes Pièces</a></li>
    <li><a class="active" href="../Vue/about.php">About</a></li>
    <li><a href="../Controleur/editionprofil.php">Editer mon profil</a></li>
    <li><a href="../Modele/deconnexion.php">Se deconnecter</a></li>
</ul>

<div class="content">
    <a class="logo"><img src="../Vue/contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="65.5" height="61" /></a>
    <h1 class="double">Mentions Légales</h1>
</div>
<div class="content">
    <div class="main_bloc">
        <ol>
        <li><h3>Présentation du site</h3></li>
        <p>
            <strong>Propriétaires : </strong> Adrien Roncaglia, Robin Blanc, Amaury Boxberger, Khaled Aouiti, Sébastien Bertrand, Yoann Aberkane.<br/>
            <strong>Web Master : </strong> employé Domisep<br/>
            <strong>Hébergeur : </strong> ISEP<br/>
            <strong>Nous contacter : </strong><a href="Contact.php">ici<a/>
            <strong>Accueil : </strong><a href="Accueil.html">ici<a/>
        </p>

        <li><h3>Conditions générales d'utilisation</h3></li>
        <p>
        </p>
            <li><h3>Contact administrateur</h3></li>
            <p>
               Avant de nous contacter, veuillez vérifier si la réponse à votre question ne se trouve pas dans notre F.A.Q .
                <br>
                <a href="../Vue/FAQ.php"><input type ="submit" value="FAQ" class = "new"/></a></p>
            </p>
            <p>
                Sinon vous pouvez contactez un administrateur :
                <a href="../Vue/FAQ.php"><input type ="submit" value="Contact admin" class = "new"/></a>
            </p>
        </ol>
    </div>
</div>

</body>

<div class="footer">
    <p>Copyright : B-Creative</p>
</div>

</html>
