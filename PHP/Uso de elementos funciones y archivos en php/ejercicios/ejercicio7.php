<?php

    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }
    
    if (!file_exists("Tests/datos_numericos.txt")) {
        file_put_contents("Tests/datos_numericos.txt", "10,20,30,40");
    }

    $content = file_get_contents("Tests/datos_numericos.txt");

    $explodedContent = explode(",", $content);

    echo array_sum($explodedContent);
?>