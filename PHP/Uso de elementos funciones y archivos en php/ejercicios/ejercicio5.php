<?php

    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }
    
    if (!file_exists("Tests/origen.txt")) {
        file_put_contents("Tests/origen.txt", "Este es el archivo original");
    }

    if (!file_exists("Tests/copia.txt")) {
        copy("Tests/origen.txt", "Tests/copia.txt");
    }
    
    echo file_get_contents("Tests/copia.txt");

?>