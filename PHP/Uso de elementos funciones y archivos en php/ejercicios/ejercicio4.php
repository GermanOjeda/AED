<?php
    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }

    if (!file_exists("Tests/nombres.txt")) {
        $file = fopen("Tests/nombres.txt", "w");
        $nombres = ["Ana", "Luis", "Marta", "Carlos", "Julia"];
        foreach ($nombres as $key => $value) {
            fwrite($file, "$value\n");
        }
        fclose($file);
    }

    echo file_get_contents("Tests/nombres.txt");
?>