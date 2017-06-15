<?php

//Connection avec la BDD.

mysql_connect("localhost", "root", "");
mysql_select_db("bdddomisep");


function getbdd()
{
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=bdddomisep;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    }catch (Exception $e){
        die ('Erreur :' . $e->getMessage());
    }return $bdd;
}



if (isset($_POST['sup'])) {
    $bdd=getbdd();
    $sup=$_POST['sup'][0];
    print_r($_POST['sup'][0]);
    $supp = $bdd -> prepare('DELETE FROM membres WHERE id='.$sup);
    $supp -> execute();
    header('Location: http://localhost/Projet-app/Site/Controleur/bo.php');
}

?>

