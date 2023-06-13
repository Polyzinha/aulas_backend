<?php

require_once "../conexao.php";

if(isset($_GET['codigo']))
{

$id = $_GET['codigo'];

$sql = "DELETE FROM `disciplina` WHERE  `codigo`= ? ; ";

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id);

$comando->execute();

}

header("Location: index.php");