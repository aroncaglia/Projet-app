<?php
session_start();
$id =$_SESSION['id'];

require('../Modele/Mod_maison.php');
require('../Vue/vue_maison.php');



if($_POST['requete']==='ajout'){
    $nbr=getmaison($id);
    $nbr=$nbr[0]+1;

}


if($_POST['requete']==='sup'){
    $nbr=getmaison($id);
    if ($nbr == 2)
    {
        $nbr=$nbr[0]-1;
    }
    else
    {
        header('location : localhost/Projet-app/Controleur/Maison.php');
    }

}


if($_POST['requete']==='ajouter')
{


}


if($_POST['requete']==='supprimer')
{

}