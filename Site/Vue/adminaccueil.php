<?php
session_start();
?>

<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="Csssite1.css" />
    <title>Administrateur</title>

</head>


<body>
<div align="center">
    <h1>Administrateur</h1>
    <p class=Boutons.>
    <form action="#">
        <button type="button" ><a href="../Controleur/messagerie.php">Messagerie</href></a></button>
    </form><br/>
    <form action="#">
        <button type="button"><a href="../Controleur/bo.php">Gestion utilisateurs</href></a></button>
    </form><br/>
    <form action="#">
        <button type="button"><a href="../Vue/vueprefadmin.php">Personaliser</href></a></button>
    </form>
    </p>
</div>
</body>

<div class="footer">
    <p>Copyright : B-Creative</p>
</div>

</html>