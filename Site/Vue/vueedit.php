
<html>
<head>
    <title>Edit profil</title>
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
    <h1 class="double" > Edition de mon profil </h1>
    <a class="logo"><img src="../Vue/contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="65.5" height="61" /></a>
    <div align="center">
        <form method="POST" action="" enctype="multipart/form-data">
            <label>Pseudo :</label>
            <input type="text" name="newpseudo" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" /><br /><br />
            <label>Mail :</label>
            <input type="text" name="newmail" placeholder="Mail" value="<?php echo $user['mail']; ?>" /><br /><br />
            <label>Mot de passe :</label>
            <input type="password" name="newmdp1" placeholder="Mot de passe"/><br /><br />
            <label>Confirmation - mot de passe :</label>
            <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />
            <input type="submit" class="new5" value="Mettre à jour mon profil !" />
        </form>
        <?php if(isset($msg)) { echo $msg; } ?>
    </div>
</div>
</body>

<div class="footer">
    <p>Copyright : B-Creative</p>
</div>

</html>
