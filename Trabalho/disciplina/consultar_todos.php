<?php

require_once "../conexao.php";

$sql = "SELECT * FROM `disciplina` ";

$comando = $conexao->prepare($sql);

$comando->execute();

$resultado = $comando->get_result();

$disciplinas = [];

while($disciplina = $resultado->fetch_assoc()){
    
    $disciplinas[] = $disciplina;
}
