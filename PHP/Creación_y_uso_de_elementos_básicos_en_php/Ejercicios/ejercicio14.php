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