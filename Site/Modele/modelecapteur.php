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

    $requete = $bdd->query('SELECT Fonction, id FROM capteurs_liste ;');                  // Permet l'affectation prochaine
    $types = $requete->fetchAll();
    $requete->closeCursor();




    ?>

<?php

//Connection avec la BDD.

mysql_connect("localhost", "root", "");
mysql_select_db("bdddomisep");

$te = $_SESSION['id'];

$reponse = mysql_query("SELECT * FROM capteurs WHERE id_capteur = $te ");



?>

    <?php
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
                INSERT INTO capteurs(id_capteur, Fonction)
                VALUES(:ID,:fonction)'
            );
            $requete->execute(array(
                'ID' => $_SESSION['id'],
                'fonction' => $_POST['fonction'],
            ));
            $requete->closeCursor();

            echo 'Votre capteur a bien été ajouté !';
            echo '<p> Retour vers la page capteur ?  <a href="../Controleur/capteur.php"><input type="submit" value="Retour" class ="id" /></a> </p>';
        }
        elseif ($_POST['action'] == 'choix2') {                        // Second choix
                $requete = $bdd->prepare('
                    DELETE * FROM capteurs WHERE Fonction = fonction and id_capteur = $te 
                ');
                $requete->closeCursor();

                echo 'Votre capteur a bien été supprimé !';
                echo '<p> Retour vers la page capteur ? <a href="../Controleur/capteur.php"><input type="submit" value="Retour" class ="id" /></a> </p>';
        }
        elseif ($_POST['action'] == 'choix3') {
                $requete = $bdd->prepare('
                UPDATE capteurs set Etat = 1 WHERE Fonction = fonction and id_capteur = $te 
                '
                );
                $requete->closeCursor();
                echo 'Votre capteur a bien été activé !';
                echo '<p> Retour vers la page capteur ? <a href="../Controleur/capteur.php"><input type="submit" value="Retour" class ="id" /></a> </p>';
        }
        elseif ($_POST['action'] == 'choix4') {
                $requete = $bdd->prepare('
                UPDATE capteurs set Etat = 0 WHERE Fonction = fonction and id_capteur = $te 
                '
                );
                $requete->closeCursor();
                echo 'Votre capteur a bien été désactivé !';
                echo '<p> Retour vers la page capteur ? <a href="../Controleur/capteur.php"><input type="submit" value="Retour" class ="id" /></a> </p>';
        }


        }
    else {
        echo '<p>Veuillez choisir une requête !</p>';
    }
?>

