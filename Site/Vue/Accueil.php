<?php
session_start();

$bdd = new PDO('mysql:host=127.0.0.1;dbname=bdddomisep', 'root', '');


$getid = $_SESSION['id'];
$requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
$requser->execute(array($getid));
$userinfo = $requser->fetch();
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Vue/CssSite1.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<meta charset="UTF-8">
<body>

<ul class="horinav">

    <li><a class="active" href="../Vue/Accueil.php">Home</a></li>
    <li><a href="../Controleur/Fonctio.php" >Mes Fontionnalitées</a></li>
    <li><a href="../Vue/Camera.php">Mes Pièces</a></li>
    <li><a href="../Vue/about.php">About</a></li>
    <li><a href="../Controleur/editionprofil.php">Editer mon profil</a></li>
    <li><a href="../Modele/deconnexion.php">Se deconnecter</a></li>
</ul>

<div class="content">
    <h1 class="double" > Domisep </h1>
    <a class="logo"><img src="../Vue/contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="65.5" height="61" /></a>
    <a class="photo"><img src="../Vue/contenu/maison1.jpg" alt="Maison"  /></a>
    <h2>Bienvenue sur notre site</h2>
    <p><?php echo $userinfo['pseudo']; ?></p>
    <p>Domisep vous propose de gérer tout les paramètres que vous souhaitez depuis votre maison</p>


    <div class="general">
        <div class="information">
            <a><img src="../Vue/contenu/temp.png" alt="Température" width="80" height="80"  /></a>
            <p>Température moyenne : 22 °C </p>
        </div>

        <div class="information1">
            <a><img src="../Vue/contenu/icone-electricite.png" alt="Température" width="70" height="70"  /></a>
            <p> Consommation électricité : 1150 kWh/mois  </p>
        </div>

        <div class="information1">
            <a><img src="../Vue/contenu/alarm.png" alt="Température" width="70" height="70"  /></a>
            <p>Alarme : Activé </p>
            <div class="onoffswitch">
                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                <label class="onoffswitch-label" for="myonoffswitch">
                    <span class="onoffswitch-inner"></span>
                    <span class="onoffswitch-switch"></span>
                </label>
            </div>
        </div>
    </div>
</div>

</body>

<div class="footer">
    <p>Copyright : G8B</p>
</div>

</html>

