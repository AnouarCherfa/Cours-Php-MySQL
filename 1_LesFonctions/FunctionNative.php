<?php

        ##### Fonction En PHP Natives : des function déja inclus dans PHP #####

                ############### String ###############

    $string = "Bienvenue sur la formation ultime en PHP et MySQL.";

    // STRLEN : calcule le nombre de caractères
    echo 'Nombre de caractères : '.strlen($string).'<br/>';

    // STR_REPLACE : remplace un mot par un autre
    echo 'La string transformée :'.str_replace('Bienvenue', 'Welcome', $string).'<br />';

    ## STRTOLOWER : rendre tout en miniscule
    echo strtolower($string).'<br/>';

    ## STRTOUPPER : rendre tout en majuscule
    echo strtoupper($string).'<br/>';

    //SUBSTR
    echo substr($string, 0, 9).'<br/>';


                ############### Math ###############

    // max
    echo max(2,5,6,4,7,9,2,3).'<br/>';

    // min
    echo min(2,5,6,4,7,9,2,3).'<br/>';

    // rand : chiffre au hasard
    echo rand(0, 1).'<br/>';

    // round : arrondi le chiffre 
    echo round(35121.66489, 3).'<br/>';


                ############### Tableau ###############

    $array = array("Standhal", "Arnold", "steve");

    // array_key_exists
    if(array_key_exists(2, $array)){
        echo "Yes".'<br/>';
    }

    // count : compte le nombre de item dans le tableau
    echo count($array).'<br/>';

    // sort : organise les items de tableau par ordre alphabétique
    sort($array);

    foreach($array as $name){
        echo $name.'<br/>';
    }

?>