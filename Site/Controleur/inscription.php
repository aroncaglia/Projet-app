<?php

require '../Modele/modeleinsc.php';

require '../Vue/vueinscrip.php';

<<<<<<< HEAD
                            $erreur ="Votre compte a bien été créé ! <a href='../Controleur/connexion.php'> Me connecter </a>";
                        } else
                        {
                            $erreur = "Vos mots de passes ne correspondent pas !";
                        }
                    } else {
                        $erreur ="Adresse mail déja utilisée ! Connectez-vous <a href='../Controleur/connexion.php'> Me connecter </a>";
                    }
                } else {
                    $erreur = "Votre adresse mail n'est pas valide !";
                }
            } else {
                $erreur = "Vos adresses mail ne correspondent pas !";
            }
        } else {
            $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
        }
    } else {
        $erreur = "Tous les champs doivent être complétés !";
    }
}
require('../Vue/vueinscrip.php');
?>
=======
?>


>>>>>>> 657a50b0eb5577e82e049a424e0b6ed7993f6166
