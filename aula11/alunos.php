<?php
$aluno1=[
    "nome"=>"Poliana Silveira",
    "nota1"=>7,
    "nota2"=>9
];
$aluno2=[
    "nome"=>"Murilo Alexandre",
    "nota1"=>8,
    "nota2"=>5
];
$aluno3=[
    "nome"=>"André Felipe",
    "nota1"=>6,
    "nota2"=>7
];
$aluno4=[
    "nome"=>"Lavinia Sandi",
    "nota1"=>8,
    "nota2"=>9
];
$tabela=[
    $aluno1,
    $aluno2,
    $aluno3,
    $aluno4
];
//print_r($tabela);
echo json_encode($tabela);

?>