<?php

    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }

    if (!file_exists("Tests/tabla5.txt")) {
        $file = fopen("Tests/tabla5.txt", "w");
        $multiplyingNum = 5;
        for ($i=1; $i < 11; $i++) { 
            $result = $multiplyingNum * $i;
            fwrite($file, $multiplyingNum . " x " . $i . " = " . $result . "\n");
        }

        fclose($file);
    }

    echo file_get_contents("Tests/tabla5.txt");
?>