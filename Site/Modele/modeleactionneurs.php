<?php

session_start();

$dsn = 'mysql:host=localhost;dbname=bdddomisep;charset=utf8';
$user = 'root';
$password = '';

try {
    $bdd = new PDO($dsn, $user, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$requete = $bdd->query('SELECT type, id FROM actionneurs_liste ;');                  // Permet l'affectation prochaine
$types = $requete->fetchAll();
$requete->closeCursor();




?>

<?php

//Connection avec la BDD.

mysql_connect("localhost", "root", "");
mysql_select_db("bdddomisep");

$te = $_SESSION['id'];

$reponse = mysql_query("SELECT * FROM actionneurs WHERE id_actionneurs = $te ");



?>

