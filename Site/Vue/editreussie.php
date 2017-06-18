<?php

session_start();

?>


<html>
<head>
    <title>Profil edité</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Vue/CssSite1.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<ul class="horinav">

    <li><a href="../Vue/Accueil.php">Home</a></li>
    <li><a href="../Controleur/Fonctio.php" >Mes Fontionnalitées</a></li>
    <li><a href="../Vue/Camera.php">Mes Pièces</a></li>
    <li><a href="../Vue/about.php">About</a></li>
    <li><a class="active" href="../Controleur/editionprofil.php">Editer mon profil</a></li>
    <li><a href="../Modele/deconnexion.php">Se deconnecter</a></li>
</ul>

<div class="content">
    <h1 class="double" > Profil edité avec succès. </h1>
    <a class="logo"><img src="../Vue/contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="65.5" height="61" /></a>
    <div align="center">
        <br> <a href="../Controleur/editionprofil.php"><input type="submit" value="Retour vers l'édition de profil" class ="new5" /></a>
    </div>
</div>

</body>

<div class="footer">
    <p>Copyright : B-Creative</p>
</div>

</html>
