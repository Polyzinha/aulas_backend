<?php

require_once "../conexao.php";
if(isset($_GET['id']))
{

$id = $_GET['id'];

$sql = "SELECT * FROM `disciplina` WHERE  `iddisciplina`= ? ; ";

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id);

$comando->execute();

$resultado = $comando->get_result();

$produto = $resultado->fetch_assoc();

}
