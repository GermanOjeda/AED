<?php
    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }
    
    if (!file_exists("Tests/datos.txt")) {
        file_put_contents("Tests/datos.txt", "Hola mundo desde php");
    }
    echo file_get_contents("Tests/datos.txt");
?>