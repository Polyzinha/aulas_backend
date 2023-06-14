<?php

require_once "../conexao.php";

if (isset($_POST["id"])) {

    $codigo =        $_POST["id"];
    $nome =      $_POST["nome"];
    $ementa = $_POST["ementa"];
    $carga_horaria =     $_POST["carga_horaria"];
    $bibliografia =        $_POST["bibliografia"];
   
    $sql = "UPDATE disciplina SET `nome`=?, `ementa`=?, `carga_horaria`=?, `bibliografia`=? WHERE  `codigo`=?;";

    $comando = $conexao->prepare($sql);

    $comando->bind_param("ssssi", $nome, $ementa, $carga_horaria, $bibliografia, $codigo);

    $comando->execute();
}
header("Location: index.php");
