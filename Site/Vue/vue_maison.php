<?php
$id =$_SESSION['id'];
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="CssSite1.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<meta charset="UTF-8">
<body>

<ul class="horinav">
    <li><a href="Accueil.html">Home</a></li>
    <li><a  href="Mes_Fonctionnalitées.html">Mes Fontionnalitées</a></li>
    <li><a class="active" href="Choixmaison.php">Mes pièces</a></li>
    <li><a href="about.php">About</a></li>
</ul>



<div class="content">
    <a class="logo"><img src="contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="63" height="61" /></a>
    <div class="test">
        <?php

        require('../Modele/Mod_maison.php');
        $maison=getmaison($id);

        ?>
        <form method="post" action="../Controleur/Maison.php">
            <label for="maison" name="nbr">Dans quelle maison souhaitez vous gérer vos capteurs :</label>
            <select class="select" name="choix_maison">
                {
                <?php

                if($maison[0]==1) {
                    echo'<option value="1">maison 1</option>';
                }
                if($maison[0]==2) {
                    echo'<option value="1">maison 1</option>';
                    echo '<option value="2">maison 2</option>';
                }
                if($maison[0]==3) {
                    echo'<option value="1">maison 1</option>';
                    echo'<option value="2">maison 2</option>';
                    echo'<option value="3">maison 3</option>';
                }
                ?>
                }
            </select>
            <h1>Quelle requête ?</h1>
            <input type="radio" id="verif" name="requete" value="ajout"> Ajouter une maison à la base de données<br>
            <input type="radio" id="verif" name="requete" value="sup"> Supprimer une maison de la base de données <br>
            <input type="radio" id="verif" name="requete" value="ajouter"> Ajouter une pièce dans la maison sélectionnée<br>
            <input type="radio" id="verif" name="requete" value="supprimer"> Supprimer une pièce dans la maison sélectionnée<br>

            <input type="submit" class="Bouton"name="Ajouter_capteur" value="Envoyer" />
        </form>

    </div>
</div>
</body>

</html>