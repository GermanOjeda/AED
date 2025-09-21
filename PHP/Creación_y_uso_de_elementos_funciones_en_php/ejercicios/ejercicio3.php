<?php
$num = 51344;
function sumaDigitos($numero) {
    $resultado = 0;
    $numeros = str_split(strval($numero));
    foreach($numeros as $num) {
        $resultado += (int)$num;
    }
    return $resultado;
}

echo sumaDigitos($num);
?>