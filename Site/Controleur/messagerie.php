<?php

require '../Modele/modelemessagerie.php';

$reponse = mysql_query("SELECT * FROM contact");

require '../Vue/vuemessagerie.php';

?>