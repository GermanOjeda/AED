<?php

    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }

    if (!file_exists("Tests/canciones.txt")) {
        file_put_contents("Tests/canciones.txt", "Hysteria\nBphemian Rhapsody\nAfrica\n");
    }

    $content = file_get_contents("Tests/canciones.txt");

    $explodedContent = explode('\n', $content);

    // array_rand()

    print_r($explodedContent);


?>