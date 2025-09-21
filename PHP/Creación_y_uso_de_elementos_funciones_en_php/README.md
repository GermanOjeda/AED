## Número capicúa (palíndromo numérico)

Implementa una función esCapicua(int $n): bool que determine si un número entero positivo es capicúa.

    Un número es capicúa si se lee igual de izquierda a derecha que de derecha a izquierda.

```php
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
```


Escalera de asteriscos

## Implementa una función montañaAsteriscos(int $n, $m): void que imprima una escalera de asteriscos de altura Ny el tamaño M.

    La primera fila contiene 1 asterisco, la segunda 2, y así hasta N, M veces.


## Suma de dígitos

Implementa una función sumaDigitos(int $n): int que calcule la suma de los dígitos de un número entero positivo.

    Descompón el número en dígitos y súmalos.


```php
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
```

## Número secreto (múltiplos de 3 o 5)

Implementa una función multiplosTresOCinco(int $n): array que devuelva todos los múltiplos de 3 o 5 menores que N.

    Además, calcula la suma de dichos múltiplos.



## Secuencia de Collatz

Implementa una función secuenciaCollatz(int $n): array que genere la secuencia de Collatz a partir de un entero positivo.

    Si el número es par → dividir entre 2.
    Si es impar → multiplicar por 3 y sumar 1.
    Repetir hasta llegar a 1.
