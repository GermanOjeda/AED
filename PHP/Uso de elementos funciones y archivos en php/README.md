# Code, Learn & Practice(Acceso a Datos: "Ficheros")

## ✅ Preparación

```bash
php -v
```

Ejecuta:

```bash
php ejercicioX.php
```

Crea un fichero por ejercicio: `ejercicio01.php` … `ejercicio30.php`.

---

### 1) Hola fichero (crear y leer)

**Enunciado:** Crea un fichero `datos.txt` con el texto *"Hola Mundo desde PHP"* y, a continuación, léelo y muestra su contenido por pantalla.  
**Funciones/Comandos sugeridos:** `file_put_contents`, `file_get_contents`  

**Ejemplo de fichero generado:**

```code
datos.txt
Hola Mundo desde PHP
```
```php
<?php
    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }
    
    if (!file_exists("Tests/datos.txt")) {
        file_put_contents("Tests/datos.txt", "Hola mundo desde php");
    }
    echo file_get_contents("Tests/datos.txt");
?>
```


---

### 2) Guardar números en un fichero

**Enunciado:** Almacena en `numeros.txt` los números del 1 al 10 (cada número en una línea). Luego léelo y muestra todos los números.  
**Funciones sugeridas:** `fopen`, `fwrite`, `fclose`, `file`  

**Ejemplo de fichero generado:**

```code
numeros.txt
1
2
3
...
10
```
```php
<?php
    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }

    if (!file_exists("Tests/numeros.txt")) {
        $file = fopen("Tests/numeros.txt", "w");
        
        for ($i=1; $i < 11; $i++) { 
            fwrite($file, $i);
        }

        fclose($file);
    }

    echo file_get_contents("Tests/numeros.txt");
?>
```
---

### 3) Contar palabras en un fichero

**Enunciado:** Escribe un texto en `texto.txt`, luego haz que tu programa cuente cuántas palabras contiene ese archivo.  
**Funciones sugeridas:** `file_get_contents`, `str_word_count`  

**Ejemplo de fichero generado:**

```code
texto.txt
PHP es muy divertido y potente.
```
```php
<?php
    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }
    
    if (!file_exists("Tests/texto.txt")) {
        file_put_contents("Tests/texto.txt", "PHP es muy divertido y potente");
    }

    echo str_word_count(file_get_contents("Tests/texto.txt"));
?>
```
---

### 4) Escribir y leer array en fichero

**Enunciado:** Guarda un array de nombres en `nombres.txt` (uno por línea). Después, léelo y muéstralos en lista numerada.  
**Funciones sugeridas:** `fopen`, `fwrite`, `fgets`  

**Ejemplo de fichero generado:**

```code
nombres.txt
Ana
Luis
Marta
Carlos
Julia
```
```php
<?php
    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }

    if (!file_exists("Tests/nombres.txt")) {
        $file = fopen("Tests/nombres.txt", "w");
        $nombres = ["Ana", "Luis", "Marta", "Carlos", "Julia"];
        foreach ($nombres as $key => $value) {
            fwrite($file, "$value\n");
        }
        fclose($file);
    }

    echo file_get_contents("Tests/nombres.txt");
?>
```
---

### 5) Copiar contenido de un fichero a otro

**Enunciado:** Copia el contenido de `origen.txt` en un archivo `copia.txt`.  
**Funciones sugeridas:** `copy`, `file_get_contents`, `file_put_contents`  

**Ejemplo de fichero inicial:**

```code
origen.txt
Este es el archivo original.
```


**Ejemplo de fichero resultante:**

```code
copia.txt
Este es el archivo original.
```

```php
<?php

    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }
    
    if (!file_exists("Tests/origen.txt")) {
        file_put_contents("Tests/origen.txt", "Este es el archivo original");
    }

    if (!file_exists("Tests/copia.txt")) {
        copy("Tests/origen.txt", "Tests/copia.txt");
    }
    
    echo file_get_contents("Tests/copia.txt");

?>
```

---

### 6) Invertir el contenido de un fichero

**Enunciado:** Lee `frase.txt`, invierte el texto y guarda el resultado en `frase_invertida.txt`.  
**Funciones sugeridas:** `file_get_contents`, `strrev`, `file_put_contents`  

**Ejemplo de fichero inicial:**

```code
frase.txt
Hola PHP
```

**Ejemplo de fichero resultante:**

```code
frase_invertida.txt
PHP aloH
```

```php
<?php

    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }
    
    if (!file_exists("Tests/frase.txt")) {
        file_put_contents("Tests/frase.txt", "Hola PHP");
    }

    $textoInvertido = strrev(file_get_contents("Tests/frase.txt"));

    if (!file_exists("Tests/frase_invertida.txt")) {
        file_put_contents("Tests/frase_invertida.txt", $textoInvertido);
    }

    echo file_get_contents("Tests/frase_invertida.txt");
?>
```

---

### 7) Calcular suma desde fichero

**Enunciado:** Guarda números separados por comas en `datos_numericos.txt`. Léelos y calcula su suma.  
**Funciones sugeridas:** `file_get_contents`, `explode`, `array_sum`  

**Ejemplo de fichero:**

```code
datos_numericos.txt
10,20,30,40
```

```php
<?php

    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }
    
    if (!file_exists("Tests/datos_numericos.txt")) {
        file_put_contents("Tests/datos_numericos.txt", "10,20,30,40");
    }

    $content = file_get_contents("Tests/datos_numericos.txt");

    $explodedContent = explode(",", $content);

    echo array_sum($explodedContent);
?>
```


---

### 8) Crear fichero de multiplicaciones

**Enunciado:** Genera la tabla del 5 y guárdala en `tabla5.txt`. Luego muéstrala.  
**Funciones sugeridas:** `fopen`, `fwrite`, `file`  

**Ejemplo de fichero:**

```code
tabla5.txt
5 x 1 = 5
5 x 2 = 10
...
5 x 10 = 50
```

```php
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
```

---

### 9) Registrar entradas de usuario

**Enunciado:** Guarda los nombres recibidos en un formulario dentro de `usuarios.txt` (cada nombre en una línea). Luego muéstralos.  
**Funciones sugeridas:** `fopen`, `fwrite`, `file`  

**Ejemplo de fichero:**

```code
usuarios.txt
Ana
Pedro
Lucía
```

---

### 10) Leer JSON desde fichero

**Enunciado:** Crea `datos.json` con información de personas (nombre y edad). Haz que el programa lo lea y muestre los datos.  
**Funciones sugeridas:** `file_get_contents`, `json_decode`  

**Ejemplo de fichero:**

```code
datos.json
[
  {"nombre": "Ana", "edad": 25},
  {"nombre": "Luis", "edad": 30}
]
```

---

### 11) Diario personal secreto

**Enunciado:** Guarda entradas con fecha y hora en `diario.txt`. Luego muéstralas todas.  

**Ejemplo de fichero:**

```code
diario.txt
[2025-09-24 10:00] Hoy aprendí PHP con ficheros 😄
[2025-09-24 12:00] Almorcé pizza mientras programaba.
```

---

### 12) Ranking de videojuegos

**Enunciado:** Guarda juegos con puntuaciones en `ranking.txt`, ordénalos y muestra el top 3.  

**Ejemplo de fichero:**

```code
ranking.txt
Zelda: 10
Mario: 9
Sonic: 8
```

---

### 13) Canción aleatoria

**Enunciado:** Guarda títulos en `canciones.txt` y muestra uno al azar.  

**Ejemplo de fichero:**

```code
canciones.txt
Hysteria
Bohemian Rhapsody
Africa
```

```php
<?php

    if(!file_exists("Tests/")) {
        mkdir("Tests");
    }

    if (!file_exists("Tests/canciones.txt")) {
        file_put_contents("Tests/canciones.txt", "Hysteria\nBphemian Rhapsody\nAfrica\n");
    }

    $content = file_get_contents("Tests/canciones.txt");

    $explodedContent = explode('\n', $content);

    // array_rand()

    print_r($explodedContent);


?>
```

---

### 14) Generador de excusas divertidas

**Enunciado:** Lee excusas desde `excusas.txt` y muestra una aleatoria.  

**Ejemplo de fichero:**

```code
excusas.txt
Mi perro se comió la tarea.
El Wi-Fi decidió tomarse el día libre.
Me abdujeron los marcianos.
```

---

### 15) Lista de chistes (rotativos)

**Enunciado:** Muestra un chiste distinto en cada ejecución desde `chistes.txt`.  

**Ejemplo de fichero:**

```code
chistes.txt
¿Sabes cuál es el colmo de un programador? Tener mala RAM-oria.
Ayer vi un bit triste… estaba des-bit-ido.
Yo no sudo, compilo.
```

---

### 16) Adivina la palabra

**Enunciado:** Elige una palabra de `palabras.txt` y muestra solo 2 letras, el usuario debe adivinarla.  

**Ejemplo de fichero:**

```code
palabras.txt
manzana
platano
cereza
```

---

### 17) Generador de nombres para superhéroes

**Enunciado:** Combina palabras de `adjetivos.txt` y `animales.txt`.  

**Ejemplo de ficheros:**

```code
adjetivos.txt
Increíble
Rápido
Misterioso
```

```code
animales.txt
Tigre
Águila
Lobo
```

---

### 18) Encuesta de comidas favoritas

**Enunciado:** Guarda respuestas de usuarios en `comidas.txt` y genera ranking.  

**Ejemplo de fichero:**

```code
comidas.txt
pizza
sushi
pizza
pasta
```

---

### 19) Simulador de tweets

**Enunciado:** Guarda tweets en `tweets.txt` con fecha y hora, muestra los últimos 5.  

**Ejemplo de fichero:**

```code
tweets.txt
[2025-09-24 09:30] Aprendiendo PHP con ejercicios divertidos #php
[2025-09-24 10:00] Otro día más programando 🚀
```

---

### 20) Historias locas (Mad Libs)

**Enunciado:** Reemplaza placeholders en `plantilla.txt` con palabras aleatorias de otros ficheros.  

**Ejemplo de ficheros:**

```code
plantilla.txt
Un [animal] viajó a [lugar] para comer [comida].
```

```code
animales.txt
gato
dragón
perro
```

```code
lugares.txt
la Luna
Tokio
la playa
```

```code
comidas.txt
tacos
ramen
helado
```

## Licencia 📄

Este proyecto está bajo la Licencia (Apache 2.0) - mira el archivo [LICENSE.md]([../../../LICENSE.md](https://github.com/jpexposito/code-learn-practice/blob/main/LICENSE)) para detalles.
