<?php
session_start();

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="../View/CssSite1.css">

    <title>annonces</title>
</head>
<?php
require('../modele/Mod_maison.php');
echo 'cc';

$maison=getmaison(2);
print_r($maison);
?>
<body>


<label for="maison">Quelle maison :</label>
<select class="select" name="maison">
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
    ?>
</select>


</body>



