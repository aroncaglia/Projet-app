

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../Vue/CssSite1.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capteurs</title>

</head>
<meta charset="UTF-8">
<body>

<ul class="horinav">
    <li><a href="../Vue/Accueil.php">Home</a></li>
    <li><a class="active" href="../Controleur/Fonctio.php">Mes Fontionnalitées</a></li>
    <li><a href="../Vue/Camera.php">Mes Pièces</a></li>
    <li><a href="../Vue/about.php">About</a></li>
    <li><a href="../Controleur/editionprofil.php">Editer mon profil</a></li>
    <li><a href="../Modele/deconnexion.php">Se deconnecter</a></li>
</ul>

<div class="content">
    <a class="logo"><img src="../Vue/contenu/LOGO_ISEP_FINAL.png" alt="Logo" width="65.5" height="61" /></a>
    <h1 class="double">Vos capteurs</h1>
</div>
<div class="content">
                <div class="main_bloc">
                    <form method="post" action="../Modele/modelecapteur.php">
                        <p align="middle">
                        <table>
                            <tr>
                                <th align="middle">Id du capteur</th>
                                <th align="middle">Type de capteurs</th>
                                <th align="middle">Etat du capteur</th>
                            </tr>
                            <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle

                            while($donnees = mysql_fetch_array($reponse))
                            {
                                ?>

                                <tr>

                                    <td align="middle"><?php echo $donnees['id'];?></td>
                                    <td align="middle"><?php echo $donnees['Fonction'];?></td>
                                    <td align="middle"><?php echo $donnees['Etat'];?></td>
                                </tr>

                                <?php
                            }  //fin de la boucle, le tableau contient toute la BDD

                            //deconnection de mysql
                            ?>
                        </table>
                        <br />
                            <label for="fonction">Capteur :<br /></label>
                            <select name="fonction" class="barre">
                                <option disabled selected> Type de capteur</option>
                                <?php
                                foreach( $types as $type ) {
                                    ?>
                                    <option value="<?php echo $type['Fonction']; ?>"><?php echo $type['Fonction']; ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </p>
                        <h1> Edition </h1>
                        </p>

                        <input type="radio" name="action" value="choix1" id="choix1" /><label for="requete1"> Ajouter le capteur </label><br />
                        <input type="radio" name="action" value="choix2" id="choix2" /><label for="requete2"> Retirer le capteur </label><br />
                        <input type="radio" name="action" value="choix3" id="choix3" /><label for="requete3"> Activer le capteur </label><br />
                        <input type="radio" name="action" value="choix4" id="choix4" /><label for="requete4"> Desactiver le capteur </label><br />

                        <br />
                        <input type="submit" value="Envoyer" class="button" />
                        <br><?php echo $te ?>
                        </p>

                    </form>




                </div>

</body>

<div class="footer">
    <p>Copyright : B-Creative</p>
</div>

</html>
