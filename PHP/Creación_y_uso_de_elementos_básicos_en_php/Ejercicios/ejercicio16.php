<?php
function numeroPerfecto($number=13){
    $counter = 0;
    for ($i = 1; $i < $number; $i++) {
        if (($number % $i) == 0) {
            $counter += $i;
        }
    }

if ($counter == $number) {
    echo "Es perfecto";
} else {
    echo "No es perfecto";
}
}

echo numeroPerfecto(6);
?>