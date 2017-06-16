<?php

function getbdd()
{
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=bdddomisep;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    }catch (Exception $e){
        die ('Erreur :' . $e->getMessage());
    }return $bdd;
}


function getmaison($id){
    $bdd=getbdd();
    $query=$bdd->prepare('SELECT Nbrmais FROM membres WHERE id = :id ');
    $query->bindParam('id',$id,PDO::PARAM_STR);
    $query->execute();
    $result=$query->fetch();
    return $result;
}

function getcapt($id,$nbr){
    $bdd=getbdd();
    $query=$bdd->prepare('SELECT Type FROM capteurs WHERE id_capteur = :id  and WHERE Nbrmais = :nbr');
    $query->bindParam('id',$id,PDO::PARAM_STR);
    $query->bindParam('nbr',$nbr,PDO::PARAM_STR);
    $query->execute();
    $result=$query->fetchAll();
    return $result;
}

function insertmaison($nbr){
    $bdd=getbdd();
    $query=$bdd->prepare('INSERT INTO membres(Nbrmais) VALUES(:nbr'); // prépare la requete
    $query->bindParam('nbr', $nbr,PDO::PARAM_STR);
    $query->execute();
}

?>