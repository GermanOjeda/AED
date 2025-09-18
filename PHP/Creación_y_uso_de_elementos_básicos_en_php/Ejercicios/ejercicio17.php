<?php

function invertirNumero($num="123") {
    if(is_string($num)){
        $invertedNum = strrev($num);
        echo $num;
        echo "\n";
        echo $invertedNum;
    } else {
        echo "El valor tiene que ser una cadena de texto";
    }
}

invertirNumero("466")
?>