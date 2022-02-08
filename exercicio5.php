<?php

// 5) Crie um algoritmo que faça o controle da média das notas dos alunos de uma turma, seguindo o array fornecido. Para simplificar, será fornecido um array com as notas de apenas quatro alunos
//    Será fornecido um segundo array com o nome destes alunos. Caso a média das 3 notas seja maior ou igual a 70, o aluno estará aprovado, caso contrário reprovado.
//    Retorne um array com a média das notas de cada aluno, busque no segundo array o nome do aluno, e adicione uma propriedade “status”, informando se o aluno está aprovado ou não.
//    Notas:
//       '[{"ID":"0001","Nota":60.5},{"ID":"0002","Nota":80.5},{"ID":"0002","Nota":70},{"ID":"0004","Nota":40.5},{"ID":"0004","Nota":40.5},{"ID":"0003","Nota":84},{"ID":"0003","Nota":56},{"ID":"0001","Nota":90},{"ID":"0001","Nota":100},{"ID":"0003","Nota":40},{"ID":"0002","Nota":61},{"ID":"0004","Nota":35}]'
//    Nome Alunos:
//       '[{"ID":"0001","nome":"João da Silva"},{"ID":"0002","nome":"Claudia dos Santos"},{"ID":"0003","nome":"Alberto Rodrigues"},{"ID":"0004","nome":"Márcio Augusto"}]'


$notas = [
    "notas" => [
    ["ID"=>"0001","Nota"=>60.5],
    ["ID"=>"0002","Nota"=>80.5],
    ["ID"=>"0002","Nota"=>70],
    ["ID"=>"0004","Nota"=>40.5],
    ["ID"=>"0004","Nota"=>40.5],
    ["ID"=>"0003","Nota"=>84],
    ["ID"=>"0003","Nota"=>56],
    ["ID"=>"0001","Nota"=>90],
    ["ID"=>"0001","Nota"=>100],
    ["ID"=>"0003","Nota"=>40],
    ["ID"=>"0002","Nota"=>61],
    ["ID"=>"0004","Nota"=>35]
    ]
];

$nomes = [
    "nomes" => [
    ["ID"=>"0001","nome"=>"João da Silva"],
    ["ID"=>"0002","nome"=>"Claudia dos Santos"],
    ["ID"=>"0003","nome"=>"Alberto Rodrigues"],
    ["ID"=>"0004","nome"=>"Márcio Augusto"]
    ]
];

$soma_nota_id_1 = 0;
$soma_nota_id_2 = 0;
$soma_nota_id_3 = 0;
$soma_nota_id_4 = 0;

foreach ($notas as $chave => $valor){
    foreach ($valor as $ch => $vlr){
        if ($vlr["ID"] == "0001"){
            $soma_nota_id_1 = $soma_nota_id_1 + $vlr["Nota"];         // Soma todas as notas do ID = 0001
            $media_id_1 = $soma_nota_id_1/3;                          // Faz a média das notas do ID = 0001
            if ($media_id_1 >= 70){                                   // Verifica se o aluno do ID = 0001 foi aprovado ou reprovado
                $status1 = "Aprovado";
            }
            else {
                $status1 = "Reprovado";
            }
        }
        elseif ($vlr["ID"] == "0002"){
            $soma_nota_id_2 = $soma_nota_id_2 + $vlr["Nota"];
            $media_id_2 = $soma_nota_id_2/3;
            if ($media_id_2 >= 70){
                $status2 = "Aprovado";
            }
            else {
                $status2 = "Reprovado";
            }
        }
        elseif ($vlr["ID"] == "0003"){
            $soma_nota_id_3 = $soma_nota_id_3 + $vlr["Nota"];
            $media_id_3 = $soma_nota_id_3/3;
            if ($media_id_3 >= 70){
                $status3 = "Aprovado";
            }
            else {
                $status3 = "Reprovado";
            }
        }
        elseif ($vlr["ID"] == "0004"){
            $soma_nota_id_4 = $soma_nota_id_4 + $vlr["Nota"];
            $media_id_4 = $soma_nota_id_4/3;
            if ($media_id_4 >= 70){
                $status4 = "Aprovado";
            }
            else {
                $status4 = "Reprovado";
            }
        }        
    }
}

$array_retorno = [["ID" => "0001"], ["ID" => "0002"], ["ID" => "0003"], ["ID" => "0004"]];  // Array de retorno


foreach($nomes as $chave => $valor){                            // Busca no segundo array os nomes dos alunos
    foreach ($valor as $ch => $vlr){
        if ($vlr["ID"] == "0001"){                              // Adicionando chaves (nome, media, status) e valores para cada ID
            $array_retorno[0]["nome"] = $vlr["nome"];
            $array_retorno[0]["media"] = $media_id_1;
            $array_retorno[0]["status"] = $status1;
        }
        elseif ($vlr["ID"] == "0002"){
            $array_retorno[1]["nome"] = $vlr["nome"];
            $array_retorno[1]["media"] = $media_id_2;
            $array_retorno[1]["status"] = $status2;
        }
        elseif ($vlr["ID"] == "0003"){
            $array_retorno[2]["nome"] = $vlr["nome"];
            $array_retorno[2]["media"] = $media_id_3;
            $array_retorno[2]["status"] = $status3;
        }
        elseif ($vlr["ID"] == "0004"){
            $array_retorno[3]["nome"] = $vlr["nome"];
            $array_retorno[3]["media"] = $media_id_4;
            $array_retorno[3]["status"] = $status4;
        }
    }
}

print_r($array_retorno[3]);

?>