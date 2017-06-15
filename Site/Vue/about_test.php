<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <title>Mentions légales</title>

</head>


<body>
<center><h1>Mentions Légales</h1></center>
<ol>

    <li><h3>Présentation du site</h3></li>
    <p>
        <strong>Propriétaires : </strong> Adrien Roncaglia, Robin Blanc, Amaury Boxberger, Khaled Aouiti, Sébastien Bertrand, Yoann Aberkane.<br/>
        <strong>Web Master : </strong> employé Domisep<br/>
        <strong>Hébergeur : </strong> ISEP<br/>
        <strong>Nous contacter : </strong><a href="Contact.php">ici<a/>
            <strong>Accueil : </strong><a href="Accueil.html">ici<a/>
    </p>



    <li><h3>Conditions générales d'utilisation</h3></li>

    <?php
    require('../modele/About_M.php');
    $CGU=getCGU();
    print_r($CGU[0]);
    ?>


</ol>

</body>

</html>