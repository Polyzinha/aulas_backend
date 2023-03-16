<h2>Exercício 3</h2>
<?php
$pessoa1=[
    "nome" => "Poliana",
    "nota1" => 7,
    "nota1" => 9
];
$pessoa2=[
    "nome" => "Murilo",
    "nota1" => 8,
    "nota1" => 5
];
$pessoa3=[
    "nome" => "André",
    "nota1" => 6,
    "nota1" => 7
];
$dados = [
    $pessoa1, $pessoa2, $pessoa3
];

for($i=0;$i<=2;$i++){
    foreach($dados[$i] as $key=>$value){
        echo $value. " | " ;
        }
        echo "<br>";
    }

?>