<html>
<head>
    <title>Page de connexion</title>
    <link rel="stylesheet" type ="text/css" href="../Vue/CssSite1.css" />
    <meta charset="utf-8">
</head>
<body>

<ul class="horinav">
    <li><a href="../Vue/Acceuilavconnexion.html">Home</a></li>
    <li><a href="../Vue/Quisommesnous.html"> Qui sommes nous ? </a></li>
    <li><a href="../Controleur/inscription.php">Inscription</a></li>
    <li><a class="active" href="../Controleur/connexion.php">Se connecter</a></li>
</ul>

<div class="content">
    <h1 class="double" > Domisep </h1>
</div>
<div>
    <a class="logo"><img src="../Vue/contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="65.5" height="61" /></a>
    <p>
        <a href="../Controleur/Contact.php"><input type ="submit" value="Contact Administrateur" class = "new"/></a>

        <a class = "phot"><img src="../Vue/contenu/LOGO_ISEP_FINAL.png" alt="Logo du site" title="Domisep" /></a>
    </p>
        <form method="POST" action="" class="form" >
        <input type="email" name="mailconnect" placeholder="Mail" class="inputbasic"/>
        <br>
        <input type="password" name="mdpconnect" placeholder="Mot de passe" class="inputbasic"/>
        <br /><br />
        <input type="submit" name="formconnexion" value="Se connecter !" />
    </form>
    <a href="../Controleur/inscription.php"><input type="submit" value="Toujours pas inscrit ?" class ="new2" /></a>

    </p>
<?php
if(isset($erreur)) {
    echo '<font color="red">'.$erreur."</font>";
}
?>
</div>
</body>

<div class="footer">
    <p>Copyright : B-Creative</p>
</div>

</html>