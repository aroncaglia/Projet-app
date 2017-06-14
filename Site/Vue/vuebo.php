<!DOCTYPE html>
<html >
<head>
    <title>Info utilisateur</title>
    <link rel="stylesheet" type ="text/css" href="../Vue/CssSite1.css" />
    <meta charset="utf-8">
</head>
<body>

<div align="middle">
    <h1> Voici la liste de vos utilisateurs :</h1>
<table>
    <tr>
        <th>id</th>
        <th>Pseudo</th>
        <th>mail</th>
        <th>Nbrmais</th>
    </tr>
    <?php //On affiche les lignes du tableau une à une à l'aide d'une boucle

    while($donnees = mysql_fetch_array($reponse))
    {
        ?>

        <tr>

            <td><?php echo $donnees['id'];?></td>
            <td><?php echo $donnees['pseudo'];?></td>
            <td><?php echo $donnees['mail'];?></td>
            <td><?php echo $donnees['Nbrmais'];?></td>
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