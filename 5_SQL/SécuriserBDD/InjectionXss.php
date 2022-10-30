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

    // $prenom = '" OR 1=1#'; Une Attaque en injection pour récuperer les données!!!
    // $prenom = htmlspecialchars($prenom); ## Contrer l'attaque mais pas conseiller

    $prenom = "Anouar";
    $nom    = "CHERFA";

    $requete = $bdd->prepare('SELECT prenom, nom, serie_preferee, metier
                            FROM users
                            LEFT JOIN jobs ## Affiche toute la table de gauche
                            ON users.id = jobs.id_user
                            WHERE prenom = ? && nom = ?');
    $requete->execute(array($prenom, $nom));



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