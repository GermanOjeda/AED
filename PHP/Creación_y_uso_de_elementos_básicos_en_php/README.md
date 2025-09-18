Bloque 1: Conceptos básicos (introducción a php)
Variables y Condicionales

Mayor de dos números
```php
<?php

function biggerNumber($n1, $n2) {
    if ($n1 > $n2) {
        return $n1;
    } else {
        return $n2;
    }
}

echo biggerNumber(4 ,2);

?>
```

Edad permitida
```php
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
```

Positivo, negativo o cero
```php
<?php

$number = 0;

if ($number == 0) {
    echo "Es cero";
};

if ($number > 0) {
    echo "Es positivo";
} elseif ($number < 0) {
    echo "Es negativo";
};

?>
```

Nota final
```php
<?php

$nota = 4;

if ($nota < 5) {
    echo "Suspenso";
} elseif ($nota <= 6) {
    echo "Aprobado";
} elseif ($nota <= 8) {
    echo "Notable";
} elseif ($nota <= 10) {
    echo "Sobresaliente";
};

?>
```

2️⃣ Bucles (for, while, foreach)

Contar del 1 al 100
```php
<?php
$counter = 1;

while ($counter <= 100) {
    echo "$counter\n";
    $counter++;
}
?>
```

Suma acumulada
```php
<?php
$counter = 1;
$sum = 0;
while ($counter <= 50) {
    $sum = $sum + $counter;
    $counter++;
}
echo $sum;
?>
```

Tabla de multiplicar
```php
<?php
$number = 9;
$counter = 1;

while ($counter <= 10) {
    $result = $number*$counter;
    echo "$number x $counter = $result\n";
    $counter++;
}
?>
```

Números pares
```php
<?php
$counter = 1;

while ($counter <= 50) {
    if (($counter % 2) == 0) {
        echo "$counter\n";
    }
    $counter++;
}
?>
```

Cuenta atrás
```php
<?php
$counter = 10;

while ($counter >= 1) {
    echo "$counter\n";
    if ($counter == 1) {
        echo "¡Fin!\n";
    }
    $counter--;
}
?>
```

Factorial
```php
<?php
$counter = 5;
$result = 1;
while ($counter >= 1) {
    $result = $result * $counter;
    $counter--;
}
echo $result;
?>
```

3️⃣ Combinando Condicionales y Bucles

Números primos
```php
<?php
function numeroPrimo($num=15)
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
```

Fibonacci
```php
---
```

Múltiplos de un número
```php
---
```

Suma de pares e impares
```php
<?php
$even_counter = 0;
$odd_counter = 0;

for ($i=1; $i < 101; $i++) { 
    if (($i % 2) == 0) {
        $even_counter += $i;
    } else {
        $odd_counter += $i;
    }
}

echo $even_counter;
echo "\n";
echo $odd_counter;
?>
```

Adivinar número
```php
---
```

4️⃣ Construcción de Algorítmicos

Número perfecto
```php
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
```

Invertir número
```php
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
```

Palíndromo
```php
<?php

function isPalindrome(String $word="ana") {
    $lowerCaseWord = strtolower($word);
    $invertedWord = strrev($lowerCaseWord);

    if($invertedWord == $lowerCaseWord){
        echo "Es palindromo";
    } else {
        echo "No es palindromo";
    }
}

isPalindrome("Jamaj")
?>
```

Máximo común divisor (MCD)
```php
---
```

Triángulo de asteriscos
```php
---
```
