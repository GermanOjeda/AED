<?php
    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }
    
    if (!file_exists("Tests/texto.txt")) {
        file_put_contents("Tests/texto.txt", "PHP es muy divertido y potente");
    }

    echo str_word_count(file_get_contents("Tests/texto.txt"));
?>