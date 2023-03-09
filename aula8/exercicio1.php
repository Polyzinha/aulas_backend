<h2>Ordenação-Ordem Alfabética</h2>

<?php
$nome[0]="Murilo";
$nome[1]="Poliana";
$nome[2]="Dalva";
$nome[3]="Lavinia";
$nome[4]="Kauã";
$nome[5]="Camila";

for($c=0;$c<=4;$c++){
for ($i=$c+1;$i<=5;$i++){
if ($nome[$c]> $nome [$i]){
$celBranco= $nome[$i];
$nome[$i]=$nome[$c];
$nome[$c]=$celBranco;
}
}
}

var_dump($nome);
 //Camila, Dalva, Kauã,Lavinia, Murilo, Poliana
?>