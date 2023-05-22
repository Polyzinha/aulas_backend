<?php

   require_once "../conexao.php";
   
   //verifica se foi  enviado pela URL
   if(isset($_GET['id'])){

   $id=$_GET['id'];

   //String com o comando SQL para ser executado no DB
   $sql = "DELETE FROM usuario WHERE idusuario=?; ";
echo $sql; 

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("i", $id);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

//abre o arquivo form.php
header("Location: usuario.php");
}