<?php

// 1) Criei um algoritmo que ordene todos os números pares de 2 a 1000 em ordem decrescente, com exceção do último número de cada dezena, após, retorne a soma destes números.

$numero = 1000;
$contador = 0;
$soma = 0;

while ($numero != 1){
    if ($numero == 2) {
        echo $numero."<br>";
        $soma = $soma + $numero;
        break;
    }
    elseif ($numero % 2 == 0 && $numero % 5 == 0) {
        $numero = $numero - 2;
        $contador++;
    }

    elseif ($numero % 2 == 0) {
        echo $numero."<br>";
        $soma = $soma + $numero;
        $numero = $numero - 2;
    }
}

echo "<br>";
echo "O número de dezenas excluídas foi: $contador";
echo "<br>";
echo "A soma de todos números excluindo as dezenas é: $soma";

?>