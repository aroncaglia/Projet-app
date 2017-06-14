
<html>
<head>
    <title>Page de contact</title>
    <meta charset="utf-8" />
    <link href="../Vue/CssSite1.css" rel="stylesheet" type="text/css" />
</head>
<body>

<ul class="horinav">
    <a class="logo"><img src="../Vue/contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="65.5" height="61" /></a>
    <li><a class="active" href="../Vue/Accueil.php">Home</a></li>
    <li><a href="../Controleur/Fonctio.php" >Mes Fontionnalitées</a></li>
    <li><a href="../Vue/Camera.php">Mes pièces</a></li>
    <li><a href="../Vue/about.php">About</a></li>
    <li><a href="../Controleur/editionprofil.php">Editer mon profil</a></li>
    <li><a href="../Modele/deconnexion.php">Se deconnecter</a></li>
</ul>

<div class="content">
    <h1 class="double" > FORMULAIRE DE CONTACT </h1>

    <br>
    <h2> Veuillez remplir le formulaire ci-dessous, nous ferons en sorte de vous répondre sous 24 heures ! </h2>
    <form method="POST" action="">
        <div align="center">
        <table>
            <tr>
                <td align="right">
                    <label for="Nom">Nom : </label>
                </td>
                <td>
                    <input type="text" placeholder="Votre Nom" id="Nom" class="ord" name="Nom" value="<?php if(isset($Nom)) { echo $Nom; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="Prenom">Prenom :</label>
                </td>
                <td>
                    <input type="text" placeholder="Votre Prenom" id="Prenom" class="ord" name="Prenom" value="<?php if(isset($Prenom)) { echo $Prenom; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="Adresse">Adresse :</label>
                </td>
                <td>
                    <input type="text" placeholder="Votre Adresse" id="Adresse" class="ord" name="Adresse" value="<?php if(isset($Adresse)) { echo $Adresse; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="Ville">Ville :</label>
                </td>
                <td>
                    <input type="text" placeholder="Votre Ville" id="Ville" class="ord" name="Ville" value="<?php if(isset($Ville)) { echo $Ville; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="Pays">Pays :</label>
                </td>
                <td>
                    <input type="text" placeholder="Votre pays" id="Pays" class="ord" name="Pays" value="<?php if(isset($Ville)) { echo $Ville; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mail">Mail :</label>
                </td>
                <td>
                    <input type="email" placeholder="Votre mail" id="mail" class="ord" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mail"><br></br> Plainte :</label>
                </td>
                <td>
                    <br></br>  <input type="text" placeholder="Votre plainte" id="comments" class="ord" name="comments"  value="<?php if(isset($comments)) { echo $comments; } ?>" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="center">
                    <br />
                    <a class = .form></a><input type="submit" name="forminscription" class="orc" value="Envoyer le message" />
                </td>
            </tr>
        </table>
        </div>
    </form>
    </body>
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
