<?php

            // formulaire


    if(isset($_GET['prenom']) && isset($_GET['nom'])) {  ## Si nom prenom existe

                ### proteger contre les injections XSS
                
        $prenom = htmlspecialchars($_GET['prenom']);
        $nom    = htmlspecialchars($_GET['nom']);

        echo "Bonjour ".$prenom.' '.$nom.' !';  ## Alors affiches moi ce message



    }


            // Création du formulaire

    echo '<form method="GET" action="index.php">
            <p>
                <table>
                    <tr>
                        <td>Prénom</td>
                        <td><input type="text" name="prenom" /></td>
                    </tr>
                    <tr>
                        <td>Nom</td>
                        <td><input type="text" name="nom" /></td>
                    </tr>

                </table>
                <button type="submit">Envoyer</button>
            </p>
    
    
    </form>'

?>