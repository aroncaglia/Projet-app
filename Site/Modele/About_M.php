<?php
function getbdd(){
    try{
        $bdd = new PDO('mysql:host=localhost;dbname=bdddomisep;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }catch (Exception $e){
        die ('Erreur :' . $e->getMessage());
    }return $bdd;
}
function getCGU(){
    $bdd=getbdd();
    $query=$bdd->prepare('SELECT CGU FROM Info_Domisep');
    $query->execute();
    $result=$query->fetch();
    return $result;
}
?>