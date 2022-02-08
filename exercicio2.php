<?php

// 2) Crie uma função que receba como parâmetro um array de números, e retorne a soma de todos os números.

function soma($array){
    $soma = array_sum($array);
    echo "A soma dos valores do array é: $soma";
}

soma([2, 3, 4, 5, 6]);

?>