<?php

function legalAge($n1) {
    if ($n1 >= 18) {
        return "Eres mayor de edad";
    } else {
        return "Eres menor de edad";
    }
}

echo legalAge(4 );
echo "\n";
echo legalAge(26 );
?>