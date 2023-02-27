<style>
div{
 border:1px solid #000;
}
.container{
  display:grid;
  grid-template-rows:auto auto ;
  grid-template-columns:auto auto auto auto auto ;
}
</style>

<h2>Estrutura de Repetição while</h2>

<p>
    Utilizada par repetir uma sequência de
    instrução por um número predeterminado de vezes.
</p>

<p>
    <pre>
        while(condição;){
            //instruções a serem repetidas
        }
    </pre>
</p>

<div class="container">
<?php

$tabuada = 1;
while($tabuada <= 10){
echo "<div>";
$contador = 0;    
while($contador = 10){
    $resuldado = $tabuada * $contador; 
    echo "$tabuada x $contador =  $resuldado   <br>";
    $contador++;
}

   echo "</div>";
   $tabuada++;
}
?>
</div>