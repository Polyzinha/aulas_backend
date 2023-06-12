<?php
require_once "../conexao.php";


if (
        isset($_POST["codigo"]) && isset($_POST["nome"]) && isset($_POST["ementa"])
        && isset($_POST["carga_horaria"]) && isset($_POST["bibliografia"])
    ) {
    
    
        $codigo =        $_POST["codigo"];
        $nome =      $_POST["nome"];
        $ementa = $_POST["ementa"];
        $carga_horaria =     $_POST["carga_horaria"];
        $bibliografia =        $_POST["bibliografia"];
    
        //String com o comando SQL para ser executado no DB
        $sql = "UPDATE disciplina SET 
    `codigo`= ?, `nome`= ?, `ementa`= ?, `carga_horaria`= ?, `bibliografia`= ? 
    WHERE  `iddisciplina`= ? ";
    
        //Prepara o SQL para ser executado no banco de dados
        $comando = $conexao->prepare($sql);
    
        //adiciona os valores nos parâmetros
        $comando->bind_param("issss", $codigo, $nome, $ementa, $carga_horaria, $bibliografia);
    
        //executa o SQL - Comando no Banco de Dados
        $comando->execute();
    }
    //abre o arquivo form.php
    header("Location: index.php");
    