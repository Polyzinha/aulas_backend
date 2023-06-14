<?php

require_once "../conexao.php";

if(isset($_GET['codigo']))
{

$id = $_GET['codigo'];

$sql = "SELECT * FROM `disciplina` WHERE  `codigo`= ? ; ";

$comando = $conexao->prepare($sql);

$comando->bind_param("i", $id);

$comando->execute();

$resultado = $comando->get_result();

$disciplina = $resultado->fetch_assoc();

}
