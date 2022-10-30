<?php

        /* Condition if 

    $age = 25;

    if( $age < 18 ){

        echo "Vous etes mineur";
    }

    if( $age >= 18 ){

        echo "Vous etes majeur";
    }
        */

        /* les conditions multiples 

    $pseudo = "Tintin";
    $mdp = "lune";

    
        if($mdp == "lune" || $pseudo == "Tintin"){ // Soit l'un ou soit l'autre condition valide

            echo "Mot de passe valide";
        }

        if($mdp != "lune"){
            echo "Mot de passe invalide";
        }
        
        if($mdp == "lune" && $pseudo == "Tintin"){ // les deux conditions doivent etre valide

            echo "Mot de passe valide";
        }
        
        */


        /* Conditions ternaires

        $number = 22;

        echo ($number % 10 == 0) ? 'true' : 'false';

        echo (condition) ? success : echec; 

        */

        /* Expression if else 

        $age = 18;

        if($age >= 18) {

            echo "Vous etes majeur.";
        } else {

            echo "Vous etes mineur.";
        }

        */

        /* Expression if .else if. else 

        $age = 30;

        if($age >= 1 && $age < 4) {

            echo "Tu es un bébé.";

        } else if($age >= 4 && $age < 13 ) {

            echo "Tu es un enfant";

        } else if($age >= 13 && $age < 18) {

            echo "Tu es un adolescent";

        } else if($age == 18) {

            echo "Vous etes enfin majeur";

        } else if($age > 18 && $age < 30) {

            echo "Vous etes un jeune homme";

        } else {

            echo "Vous etes un homme";
        }

        */
?>