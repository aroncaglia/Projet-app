<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Vue/CssSite1.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<meta charset="UTF-8">
<body>



<ul class="horinav">
    <li><a href="../Vue/Acceuilavconnexion.html">Home</a></li>
    <li><a class="active" href="Quisommesnous.php"> Qui sommes nous ? </a></li>
    <li><a class="inscription" href="../Controleur/inscription.php">Inscription</a></li>
    <li><a class="inscription" href="../Controleur/connexion.php">Se connecter</a></li>

</ul>

<div class="content">
    <h1 class="double" > Qui sommes nous ? </h1>
    <a class="logo"><img src="../Vue/contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="63" height="61" /></a>
    <div class="presentation">
        <?php
        require('../Modele/Quisommesnous_M.php');
        $Presentation=getPresentation();
        print_r($Presentation[0]);
        ?>

    </div>


    <div class="general">
        <div class="information3">
            <p>Pourquoi choisir Domisep ?</p>
            <p>Faites nous confiance pour:</p>
            <ul>
                <li>La qualité de nos prestations</li>
                <li>Les garanties de sécurité</li>
                <li>Un service irréprochable</li>
            </ul>
        </div>

    </div>
</div>

</body>

<div class="footer">
    <p>Copyright : B-Creative</p>
</div>

</html>

