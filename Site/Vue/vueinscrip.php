<html>
<head>
    <title>Page inscription</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../Vue/CssSite1.css" />
</head>
<body>

<ul class="horinav">
    <li><a href="../Vue/Acceuilavconnexion.html">Home</a></li>
    <li><a href="Quisommesnous.php"> Qui sommes nous ? </a></li>
    <li><a class="active" href="../Controleur/inscription.php">Inscription</a></li>
    <li><a href="../Controleur/connexion.php">Se connecter</a></li>
</ul>

<div class="content">
    <h1 class="double" > Domisep </h1>
    <a class="logo"><img src="../Vue/contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="65.5" height="61" /></a>
    <div align="center">
    <h2>Inscription</h2>
    <br /><br />
    <form method="POST" action="">
        <table>
            <tr>
                <td align="right">
                    <label for="pseudo">Pseudo :</label>
                </td>
                <td>
                    <input type="text" placeholder="Votre pseudo" id="pseudo" class="ord" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="Nbrmais">Nombre de maisons :</label>
                </td>
                <td>
                    <input type="text" placeholder="Votre nbr de maison" id="Nbrmais" class="ord" name="Nbrmais" value="<?php if(isset($Nbrmais)) { echo $Nbrmais; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mail">Mail :</label>
                </td>
                <td>
                    <input type="email" placeholder="Votre mail" id="mail" class="ord" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>"  />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mail2">Confirmation du mail :</label>
                </td>
                <td>
                    <input type="email" placeholder="Confirmez votre mail" id="mail2" class="ord" name="mail2" value="<?php if(isset($mail2)) { echo $mail2; } ?>"  />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="code">Code d'accès :</label>
                </td>
                <td>
                    <input type="text" placeholder="ZOSR" id="code" name="code" class="ord" value="<?php if(isset($mail2)) { echo $mail2; } ?>" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mdp">Mot de passe :</label>
                </td>
                <td>
                    <input type="password" placeholder="Votre mot de passe" id="mdp" name="mdp" class="ord" />
                </td>
            </tr>
            <tr>
                <td align="right">
                    <label for="mdp2">Confirmation du mot de passe :</label>
                </td>
                <td>
                    <input type="password" placeholder="Confirmez votre mdp" id="mdp2" name="mdp2" class="ord" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td align="center">
                    <br />
                    <input type="submit" name="forminscription" value="Je m'inscris" class="orc" />
                </td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($erreur)) {
        echo '<font color="red">'.$erreur."</font>";
    }
    ?>
    </div>
</div>
</body>

<div class="footer">
    <p>Copyright : B-Creative</p>
</div>

</html>