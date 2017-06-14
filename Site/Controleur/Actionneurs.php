<?php
session_start();


require '../Modele/modeleactionneurs.php';

if (isset($_POST['action'])) {
    $dsn = 'mysql:host=localhost;dbname=bdddomisep;charset=utf8';
    $user = 'root';
    $password = '';

    try {
        $bdd = new PDO($dsn, $user, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);           // Ouverture de la base de données
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }                                                                 // Gestion d'erreur dans la base de données

    if ($_POST['action'] == 'choix1') {                            // Choix correspond aux différentes requêtes possibles
        $requete = $bdd->prepare('
                INSERT INTO actionneurs(id_actionneurs, type)
                VALUES(:ID,:type)'
        );
        $requete->execute(array(
            'ID' => $_SESSION['id'],
            'type' => $_POST['type'],
        ));
        $requete->closeCursor();

        echo 'Votre capteur a bien été ajouté !';
        echo '<p> Retour vers la page actionneurs ?  <a href="../Controleur/Actionneurs.php"><input type="submit" value="Retour" class ="id" /></a> </p>';
    }
    elseif ($_POST['action'] == 'choix2') {                        // Second choix
        if (isset($_POST['type'])) {
            $requete = $bdd->prepare('
                    DELETE * FROM actionneurs WHERE Type = type and id_actionneurs = $te 
                ');
            $requete->closeCursor();

            echo 'Votre capteur a bien été supprimé !';
            echo '<p> Retour vers la page actionneurs ? <a href="../Controleur/Actionneurs.php"><input type="submit" value="Retour" class ="id" /></a> </p>';
        }
    }
    elseif ($_POST['action'] == 'choix3') {
        if (isset($_POST['type'])) {
            $requete = $bdd->prepare('
                UPDATE actionneurs set Etat = 1 WHERE Type = type and id_actionneurs = $te 
                '
            );
            $requete->closeCursor();
            echo 'Votre capteur a bien été activé !';
            echo '<p> Retour vers la page actionneurs ? <a href="../Controleur/Actionneurs.php"><input type="submit" value="Retour" class ="id" /></a> </p>';
        }
    }
    elseif ($_POST['action'] == 'choix4') {
        if (isset($_POST['type'])) {
            $requete = $bdd->prepare('
                UPDATE actionneurs set Etat = 0 WHERE Type = type and id_actionneurs = $te 
                '
            );
            $requete->closeCursor();
            echo 'Votre capteur a bien été désactivé !';
            echo '<p> Retour vers la page actionneurs ? <a href="../Controleur/Actionneurs.php"><input type="submit" value="Retour" class ="id" /></a> </p>';
        }
    }


}
else {
    echo '<p>Veuillez choisir une requête !</p>';
}

require '../Vue/vueactionneurs.php';

?>