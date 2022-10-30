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

                    // Lire des informations

    // $requete = $bdd->query('SELECT *
                            // FROM users');
                            // WHERE prenom = "Anouar"
                            // LIMIT 0, 2 #### faire une limite
                            // ORDER BY id DESC #### afficher du plus  récent  au moins récent

        echo'<table border>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Série préférée</th>
                </tr>';

        while($donnees = $requete->fetch()){

            echo    '<tr>
                        <td>'.$donnees['prenom'].'</td>
                        <td>'.$donnees['nom'].'</td>
                        <td>'.$donnees['serie_preferee'].'</td>
                    </tr>';

        }

        echo '</table>';
?>