<h2>Exercício 4</h2>
<?php
$pessoa1=[
    "nome" => "Poliana",
    "nota1" => 7,
    "nota2" => 9
];
$pessoa2=[
    "nome" => "Murilo",
    "nota1" => 8,
    "nota2" => 5
];
$pessoa3=[
    "nome" => "André",
    "nota1" => 6,
    "nota2" => 7
];
$dados = [
    $pessoa1, $pessoa2, $pessoa3
];
    foreach($dados as $key=>$value){
    echo $value ["nome"] . "|";
    echo $value ["nota1"] . "|";
    echo $value ["nota2"] . "|";
    }
?>
