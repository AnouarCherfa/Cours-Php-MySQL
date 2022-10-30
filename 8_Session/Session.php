<?php

    session_start(); ## tjrs le metre au début
    session_destroy();


    ## Si variable pseudo est remplie créer un cookie
    if(!empty($_POST['pseudo'])) {

        $pseudo = $_POST['pseudo'];

        $_SESSION['pseudo'] = $pseudo;

    }

?>

                <!-- création du formulaire -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIES</title>
</head>
    <body>
        <h1>Entrez votre pseudo</h1>
        <form method="post" action="Session.php">
            <table>
                <tr>
                    <td>Pseudo</td>
                    <td><input type="text" name="pseudo" /></td>
                </tr>
            </table>
            <button type="submit">Se connecter</button>
        </form>

        <!-- Si pseudo existe affiches moi le message echo -->
        <?php
            if(!empty($_SESSION['pseudo'])) {
                echo '<h2>Bienvenue '.htmlspecialchars($_SESSION['pseudo']).'</h2>';
            }
        ?>

    </body>
</html>
