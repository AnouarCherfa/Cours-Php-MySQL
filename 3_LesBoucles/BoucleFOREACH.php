<?php

          #######  Tableaux : Boucle / Foreach : veut dire pour chaque #######

        $user = array('Nicolas', 'George', 'Marc', 'Emmanuel', 'Stendhal');
        for ($i = 0; $i < 5; $i++) 
        {
            echo "Voici le prénom : ".$user[$i]."<br/>";
        }
                   ####### Avec la methode FOREACH #######

        $user = array('Nicolas', 'George', 'Marc', 'Emmanuel', 'Stendhal');

        foreach ($user as $name) 
        {
            echo $name.'<br />';
        }
        
        $Anouar = array(
            'prenom' => 'Anouar',
            'nom'    => 'CHERFA',
            'age'    => 26 
        );

        foreach ($Anouar as $identite)
        {
            echo $identite.'<br/>';
        }

?>