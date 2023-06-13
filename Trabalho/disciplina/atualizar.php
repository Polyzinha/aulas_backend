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

    $sql = "UPDATE disciplina SET 
 `nome`= ?, `ementa`= ?, `carga_horaria`= ?, `bibliografia`= ? 
WHERE  `codigo`= ? ";

    $comando = $conexao->prepare($sql);

    $comando->bind_param("ssss", $nome, $ementa, $carga_horaria, $bibliografia);

    $comando->execute();
}
header("Location: index.php");
