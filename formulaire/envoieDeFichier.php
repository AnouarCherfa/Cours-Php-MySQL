<?php

    // $_FILES['image']['name']; ## nom de l'image
    // $_FILES['image']['type']; ## type de l'image 'png, jpeg'
    // $_FILES['image']['tmp_name']; ## emplacement de l'image
    // $_FILES['image']['error']; ## erreur


            // Envoi De Fichier PHP

    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0){

            ## 1mo = 1 000 000 d'octets
        if ($_FILES['image']['size'] <= 3000000){
            $informationImage = pathinfo($_FILES['image']['name']);
            $extensionImage =$informationImage['extension'];
            $extensionArray = array('png', 'gif', 'jpg', 'jpeg');

            if(in_array($extensionImage, $extensionArray)){
                move_uploaded_file($_FILES['image']['tmp_name'], 'upload/'.time().basename($_FILES['image']['name']));
                echo 'Envoi bien réussi !';
            }

        }
    }


                // Création du formulaire d'envoi de fichier

    echo '<form method="post" action="envoieDeFichier.php" enctype="multipart/form-data">
    
            <p>
                <h1>Formulaire</h1>
                <input type="file" name="image" /><br />
                <button type="submit">Envoyer</button>
            
            
            </p>



    </form>';



?>