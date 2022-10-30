<?php

    //  HOTE : 127.0.0.1 ou localhost - MariaDB
    //  NOM DE LA BASE : formation_users
    //  LOGIN : root

                    // Connexion à la base de donnée

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=formation_users;charset=utf8', 'root', '');
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }

                    // Ajouter un metier
    
    // $requete = $bdd->query('INSERT INTO jobs(id_user, metier) VALUE(3, "Etudiant")');
                    
    // Modifier une donnée
    // $requete =$bdd->query('UPDATE jobs SET id_user = 1 WHERE id = 1');

                    // Lire des informations

    ## Avec la méthode WHERE
    // $requete = $bdd->query('SELECT prenom, nom, serie_preferee, metier
    //                         FROM users, jobs 
    //                         WHERE users.id = jobs.id_user');

    ## Avec la methode JOIN
    $requete = $bdd->query('SELECT prenom, nom, serie_preferee, metier
                            FROM users
                            INNER JOIN jobs
                            ON users.id = jobs.id_user') or die(print_r($bdd->errorInfo())); ##Pour afficher l'erreur si existe

                            

                    // Afficher les informations
                    
    echo'<table border>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Série préférée</th>
            <th>Metier</th>
        </tr>';

    while($donnees = $requete->fetch()){

        echo    '<tr>
                    <td>'.$donnees['prenom'].'</td>
                    <td>'.$donnees['nom'].'</td>
                    <td>'.$donnees['serie_preferee'].'</td>
                    <td>'.$donnees['metier'].'</td>
                </tr>';

    }

    echo '</table>';
?>