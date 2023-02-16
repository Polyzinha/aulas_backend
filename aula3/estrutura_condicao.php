<h2>Estrutura de condição</h2>
<hr>
<p>
    A estrutura de condição é utilizada 
    para avaliar qual instrução deve ser 
    executada, dada uma condição.

    Se a condição fpor verdadeira (true) executa a
    instrução 1, no caso contrário executa a instrução 2.
    <strong>Exemplo</estrong>
    <pre> 
        if (<em>condicao</em>){
        //instrução 1
    }else{

        //instrução 2
    }
</pre>
</p>

<?php
   /*
     Para passar nde ano é necessário tirar no 
     minímo 6 pontos em cada disciplina. Murilo
     tirou .... Ele foi aprovado ou não?
    */
$nota_do_murilo = 5;
if ($nota_do_murilo >= 6){
  echo "Murilo foi aprovado!";
}else{
echo "Murilo foi reprovado!";
}

?>

<strong>Exemplo 2</strong>
<p>
    O aluno para ser aprovado precisa obter
    nota superior a 6 pontos, para fazer o exame final
    precisa ter tirado menos que 6  e mais que 3 pontos.
    Notas menores que 3 são reprovações diretas.
</p>
<?php
$nota =6;
If($nota>= 6){
    echo "Aprovado";
}else if($nota >3){
    echo "Faz exame final";
}else {
    echo "Reprovado";
}
?>