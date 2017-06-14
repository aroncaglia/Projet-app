<!DOCTYPE html>
<html >
<head>
    <title>Liste de plainte</title>
    <link rel="stylesheet" type ="text/css" href="../Vue/CssSite1.css" />
    <meta charset="utf-8">
</head>
<body>

<div align="middle">
    <h1> Voici la liste de vos plainte, par utilisateur :</h1>
    <table>
        <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Pays</th>
            <th>Mail</th>
            <th>Commentaires</th>
        </tr>
        <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle

        while($donnees = mysql_fetch_array($reponse))
        {
            ?>

            <tr>

                <td><?php echo $donnees['Nom'];?></td>
                <td><?php echo $donnees['Prenom'];?></td>
                <td><?php echo $donnees['Adresse'];?></td>
                <td><?php echo $donnees['Ville'];?></td>
                <td><?php echo $donnees['Pays'];?></td>
                <td><?php echo $donnees['mail'];?></td>
                <td><?php echo $donnees['comments'];?></td>
            </tr>

            <?php
        }  //fin de la boucle, le tableau contient toute la BDD

        mysql_close();  //deconnection de mysql
        ?>
    </table>
</div>
<p><a href="../Vue/adminaccueil.php"><input type="submit" value="Vers l'accueil" class ="new2" /></a></p>
</body>

<div class="footer">
    <p>Copyright : B-Creative</p>
</div>

</html>