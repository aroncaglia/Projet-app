<?php
session_start();
$id = $_SESSION['id'];
$bdd = new PDO('mysql:host=localhost;dbname=bdddomisep;charset=utf8', 'root', '');

try {
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=bdddomisep;charset=utf8', 'root', '');
} catch (Exception $e) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $e->getMessage());
}
if(isset($_POST['etat_alarme_bouton']))
{


}


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="Style_site.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page D'Accueil</title>

</head>
<meta charset="UTF-8">
<body>

<ul class="horinav">
    <li><a class="active" href="Acceuil.html">Home</a></li>
    <li><a href="Mes_Fonctionnalitées.html">Mes Fonctionnalitées</a></li>
    <li><a href="Camera.html">Mes Pièces</a></li>
    <li><a href="about.php">Aide</a></li>
</ul>

<div class="content">
    <h1 class="double" > Domisep </h1>
    <a class="logo"><img src="contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="63" height="61" /></a>
    <h2>Bienvenue sur notre site</h2>
    <p>Domisep vous propose de gérer tout les paramètres que vous souhaitez depuis votre maison</p>


    <div class="general">
        <div class="information">
            <a><img src="contenu/temp.png" alt="Température" width="80" height="80"  /></a>
            <p>Température moyenne : 22 °C </p>
        </div>

        <div class="information1">
            <a><img src="contenu/icone-electricite.png" alt="Consommation electrique" width="70" height="70"  /></a>
            <p> Consommation électricité : 1150 kWh/mois  </p>
        </div>

        <div class="information1">
            <a><img src="contenu/alarm.png" class="alarme" alt="Alarme" width="70" height="70"  /></a>
            <br>
            <br>
            <p>Alarme :
                <?php
                $alarme_etat = $bdd->prepare('SELECT Etat FROM actionneurs WHERE Type = \'Alarme\' AND $id = id_utilisateur');
                $alarme_etat = $bdd->query('SELECT Etat FROM actionneurs WHERE Type = \'Alarme\' AND $id = id_utilisateur ');
                if($alarme_etat == '1')
                {
                    echo "Activé";
                }
                else {
                    echo "Desactivé";
                }
                ?>
            </p>
            <div class="onoffswitch">
                <?php
                if($alarme_etat == '1')
                {
                    ?>
                    <label class="switch">
                        <input type="checkbox" id="etat_alarme_bouton" checked>
                        <div class="slider round"></div>
                    </label>
                    <?php
                }
                else
                {
                    ?>
                    <label class="switch">
                        <input type="checkbox" id="etat_alarme_bouton">
                        <div class="slider round"></div>
                    </label>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>

</body>

<div class="footer">
    <p>Copyright : G8B</p>
    <p> <a href="admpage.html"><input type="submit" value="Page Administrateur" class ="new5" /></a></p>
</div>

</html>

