
<html>
<head>
    <title>Page de Préferences</title>
    <meta charset="utf-8" />
    <link href="../Vue/CssSite1.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="content">
    <h1 class="double" > Personnalisation </h1>
    <div align="center">
        <form method="POST" action="" enctype="multipart/form-data">
            <label>Cgu :</label>
            <input type="text" name="newcgu" placeholder="Vos cgu" /><br /><br />
            <input type="submit" class="orc" value="Modifier les CGU" />
        </form>
        <?php if(isset($msg)) { echo $msg; } ?>
    </div>
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