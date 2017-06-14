<?php

require '../Modele/modelebo.php';

$reponse = mysql_query("SELECT * FROM membres");

require '../Vue/vuebo.php';

?>