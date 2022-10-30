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

                        // Ajout un utilisateur
    
    if(isset($_POST['prenom']) && isset($_POST['nom']) && ($_POST['serie'])){

        $prenom = $_POST['prenom'];
        $nom    = $_POST['nom'];
        $serie  = $_POST['serie'];
                    
        $requete = $bdd->prepare("INSERT INTO users(prenom, nom, serie_preferee) VALUES(?, ?, ?)");
        $requete->execute(array($prenom, $nom, $serie));
    }

                    // Lire des informations

    $requete = $bdd->prepare('SELECT prenom, nom, serie_preferee
                            FROM users ');
    $requete->execute();

                    // Afficher les informations
                    
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Ajouter un utilisateur</h1>

    <form method="post" action="formulaire.php">
        <table>
            <tr>
                <td>Prénom</td>
                <td><input type="text" name="prenom" /></td>
            </tr>
            <tr>
                <td>Nom</td>
                <td><input type="text" name="nom" /></td>
            </tr>
            <tr>
                <td>Série préférée</td>
                <td><input type="text" name="serie" /></td>
            </tr>
        </table>
        <button type="submit">Ajouter Votre série</button>
        
    </form>
</body>
</html>