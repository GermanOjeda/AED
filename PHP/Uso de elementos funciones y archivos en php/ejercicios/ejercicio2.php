<?php
    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }

    if (!file_exists("Tests/numeros.txt")) {
        $file = fopen("Tests/numeros.txt", "w");
        
        for ($i=1; $i < 11; $i++) { 
            fwrite($file, $i);
        }

        fclose($file);
    }

    echo file_get_contents("Tests/numeros.txt");
?>