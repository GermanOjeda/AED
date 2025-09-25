<?php

    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }
    
    if (!file_exists("Tests/frase.txt")) {
        file_put_contents("Tests/frase.txt", "Hola PHP");
    }

    $textoInvertido = strrev(file_get_contents("Tests/frase.txt"));

    if (!file_exists("Tests/frase_invertida.txt")) {
        file_put_contents("Tests/frase_invertida.txt", $textoInvertido);
    }

    echo file_get_contents("Tests/frase_invertida.txt");
?>