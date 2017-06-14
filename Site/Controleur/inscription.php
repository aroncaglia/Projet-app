<?php

require '../Modele/modeleinsc.php';

if (isset($_POST['forminscription'])) {
    $pseudo = htmlspecialchars($_POST['pseudo']);
    $Nbrmais = intval($_POST['Nbrmais']);
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $code = sha1($_POST['code']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);
    if (!empty($_POST['pseudo']) AND !empty($_POST['Nbrmais']) AND !empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']) AND !empty($_POST['code'])) {
        $pseudolength = strlen($pseudo);
        if ($pseudolength <= 255) {
            if($code = 'G8B') {
                if ($mail == $mail2) {
                    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
                        $reqmail = $bdd->prepare("SELECT * FROM membres WHERE mail = ?");
                        $reqmail->execute(array($mail));
                        $mailexist = $reqmail->rowCount();
                        if ($mailexist == 0) {
                            if ($mdp == $mdp2) {
                                $insertmbr = $bdd->prepare("INSERT INTO membres(pseudo, Nbrmais, mail, motdepasse) VALUES(?, ?, ?, ?)");
                                $insertmbr->execute(array($pseudo, $Nbrmais, $mail, $mdp));
                                $erreur = "Votre compte a bien été créé ! <a href=\"../Controleur/connexion.php\">Me connecter</a>";
                            } else {
                                $erreur = "Vos mots de passes ne correspondent pas !";
                            }
                        } else {
                            $erreur = "Adresse mail déjà utilisée !";
                        }
                    } else {
                        $erreur = "Votre adresse mail n'est pas valide !";
                    }
                } else {
                    $erreur = "Vos adresses mail ne correspondent pas !";
                }
            }
            else {
                $erreur = "Votre code n'est pas bon !";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }

}



require '../Vue/vueinscrip.php';

?>
