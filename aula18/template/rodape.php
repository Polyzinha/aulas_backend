<?php

require_once "../conexao.php";

//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM usuario;";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetro

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();
//adiciona o produto (linha do resultado) no vetor
$usuarios = [];

//pegar a primeira linha de resultado
while ($usuario = $resultado->fetch_assoc()) {
   $usuarios[] = $usuario;
}
