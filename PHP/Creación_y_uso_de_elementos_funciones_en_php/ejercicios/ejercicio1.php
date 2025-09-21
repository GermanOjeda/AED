<?php
$num = 4374;
function isCapicua($numero) {
    $reversedNum = strrev(strval($numero));
    return $reversedNum == $numero;
}

if (isCapicua($num)) {
    echo "$num is true";
} else {
    echo "$num is false";
}

?>