<?php

            // formulaire


    if(isset($_POST['prenom']) && isset($_POST['nom'])) {  ## Si nom prenom existe

                ### proteger contre les injections XSS
                
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom    = htmlspecialchars($_POST['nom']);

        echo "Bonjour ".$prenom.' '.$nom.' !';  ## Alors affiches moi ce message



    }


            // Création du formulaire

    echo '<form method="post" action="index.php">
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