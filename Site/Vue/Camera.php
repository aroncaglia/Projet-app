<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CssSite1.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<meta charset="UTF-8">
<body>

<ul class="horinav">
    <li><a href="../Vue/Accueil.php">Home</a></li>
    <li><a href="../Controleur/Fonctio.php">Mes Fontionnalitées</a></li>
    <li><a class="active" href="Camera.php">Mes Pièces</a></li>
    <li><a href="../Vue/about.php">About</a></li>
    <li><a href="../Controleur/editionprofil.php">Editer mon profil</a></li>
    <li><a href="../Modele/deconnexion.php">Se deconnecter</a></li>
</ul>

<div class="content">
    <a class="logo"><img src="contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="66" height="61" /></a>
    <h1 class="double">Vos cameras</h1>
</div>
<ul class="capt">
    <li>Camera 1
        <img src="contenu/cam1.jpg" border="5">
        <div class="slideThree">
            <input type="checkbox" value="None" id="slideThree" name="check" checked />
            <label for="slideThree"></label></div></li>
    <br/>
    <br/>
    <li>Camera 2
        <img src="contenu/cam2.png" border="5">
        <div class="slideThree1">
            <input type="checkbox" value="None" id="slideThre" name="check" checked />
            <label for="slideThree"></label></div></li>
    <br/>
    <br/>
    <li>Camera 3
        <img src="contenu/cam3.jpg" border="5">
        <div class="slideThree2">
            <input type="checkbox" value="None" id="slideThreee" name="check" checked />
            <label for="slideThree"></label></div></li>
</ul>

</body>

<div class="footer">
    <p>Copyright : B-Creative</p>
</div>

</html>