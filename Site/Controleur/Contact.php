<?php

session_start();

require '../Modele/modcontact.php';

if(isset($_POST['forminscription'])) {
    $Nom = htmlspecialchars($_POST['Nom']);
    $Prenom = htmlspecialchars($_POST['Prenom']);
    $Adresse = htmlspecialchars($_POST['Adresse']);
    $Ville = htmlspecialchars($_POST['Ville']);
    $Pays = htmlspecialchars($_POST['Pays']);
    $mail = htmlspecialchars($_POST['mail']);
    $comments = htmlspecialchars($_POST['comments']);

    if (!empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['Adresse']) AND !empty($_POST['Ville']) AND !empty($_POST['Pays']) AND !empty($_POST['mail']) AND !empty($_POST['comments'])) {
        $Nomlength = strlen($Nom);
        $Prenomlength = strlen($Prenom);
        $Adresselength = strlen($Adresse);
        $Villelength = strlen($Ville);
        $Payslength = strlen($Pays);
        $commentslength = strlen($comments);
        if ($Nomlength <= 255) {
            if ($Prenomlength <= 255) {
                if ($Adresselength <= 255) {
                    if ($Villelength <= 255) {
                        if ($Payslength <= 255) {
                            if ($commentslength <= 255) {
                                if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                                    $insertctt = $bdd->prepare("INSERT INTO contact(Nom, Prenom, Adresse, Ville, Pays, mail, comments) VALUES(?, ?, ?, ?, ?, ?, ?)");
                                    $insertctt->execute(array($Nom, $Prenom, $Adresse, $Ville, $Pays, $mail, $comments));
                                    $erreur = "Votre message a bien été envoyé ! <a href=\"../Vue/Acceuilavconnexion.html\">Vers l'accueil</a>";
                                } else {
                                    $erreur = "Votre adresse mail n'est pas valide !";
                                }
                            } else {
                                $erreur = "Votre Plainte ne peut dépasser 255 caractères !";
                            }
                        } else {
                            $erreur = "Votre Nom de pays ne doit pas dépasser 255 caractères !";
                        }
                    } else {
                        $erreur = "Votre Nom de ville ne doit pas dépasser 255 caractères !";
                    }
                } else {
                    $erreur = "Votre Adresse ne doit pas dépasser 255 caractères !";
                }
            } else {
                $erreur = "Votre Prenom ne doit pas dépasser 255 caractères !";
            }
        } else {
            $erreur = "Votre Nom ne doit pas dépasser 255 caractères !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}


require '../Vue/vuecontact.php';

?>
