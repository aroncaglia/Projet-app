<html>
<head>
    <title>Page de connexion Administrateur</title>
    <link rel="stylesheet" type ="text/css" href="../Vue/CssSite1.css" />
    <meta charset="utf-8">
</head>
<body>
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
<a href="../Controleur/inscriptionadmin.php"><input type="submit" value="Toujours pas inscrit ?" class ="new2" /></a>

</p>
<?php
if(isset($erreur)) {
    echo '<font color="red">'.$erreur."</font>";
}
?>
</div>
</body>
</html>