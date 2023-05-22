<?php

require_once "../conexao.php";


//String com o comando SQL para ser executado no DB
$sql = "SELECT * FROM usuario ; ";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//pegar o resultado da consulta
$resultado = $comando->get_result();
//cria um vetor vazio
$usuarios = [];

//pegar todas as linhas do resultado
while ($usuario = $resultado->fetch_assoc()) {

   $usuarios[] = $usuario;
}
