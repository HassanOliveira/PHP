<?php

// 4) A biblioteca de uma universidade deseja fazer um algoritmo que controle o empréstimos dos livros. Crie uma função que receba o nome da pessoa, o tipo de usuário(Aluno ou Professor). 
//    Retorne um objeto (comprovante) com a data de retirada, o nome da pessoa, o tipo de pessoa, a data atual e a data de devolução do livro (considere 10 dias a partir da retirada). 

function emprestimo($nome, $tipo_de_usuario){
    $data_de_retirada = "23-01-2022";
    $data_de_devolucao = date('d/m/Y', strtotime("+10 days",strtotime($data_de_retirada))); 

    date_default_timezone_set("America/Sao_Paulo");
    $data_atual = date("d/m/Y - H:i");

    echo "//////////  Comprovante Bibliotecário  //////////<br><br>";
    echo "Nome: $nome<br>";
    echo "Tipo de Usuário: $tipo_de_usuario<br>";
    echo "Data de Retirada: $data_de_retirada<br>";
    echo "Data Atual: $data_atual<br>";
    echo "Data de Devolução: $data_de_devolucao<br>";
}

emprestimo("Hassan", "Aluno");

?>