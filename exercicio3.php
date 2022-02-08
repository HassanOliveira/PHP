<?php

// 3) Crie uma função que receba quatro números, imprima eles em ordem decrescente.

function imprimir($n1, $n2, $n3, $n4) {
    $numeros = [$n1, $n2, $n3, $n4];
    rsort($numeros);

    foreach ($numeros as $valor){
        echo $valor."<br>";
    }
}

imprimir(3, 7, 1, 6);

?>