<?php

$num = 15;
function numeroPrimo($num)
{
    for ($i = 2; $i < $num; $i++) {
        if (($num % $i) == 0) {
            return false;
        }
    }
    return true;
}

if(numeroPrimo($num)){
    echo 'Es primo';
}else{
    echo 'No es primo';
}
?>