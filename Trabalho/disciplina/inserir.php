 <?php require_once "../conexao.php";

    $codigo =        $_POST["codigo"];
    $nome =      $_POST["nome"];
    $ementa = $_POST["ementa"];
    $carga_horaria =     $_POST["carga_horaria"];
    $bibliografia =        $_POST["bibliografia"];
    //string com o comendo sql para ser executoado no db
    $sql = "INSERT INTO disciplina (`codigo`, `nome`, `ementa`, `carga_horaria`, `bibliografia`) VALUES (?,?,?,?,?);";
    //echo $sql;
    //prepara o slq para ser executado no banco de dados
    $comando = $conexao->prepare($sql);
    //adiciona os valores nos parametros
    $comando->bind_param("issss", $codigo, $nome, $ementa, $carga_horaria, $bibliografia);
    //executa o sql - comando no banco de dados
    $comando->execute();
    //abre o arquivo form.php
    header("location: index.php");
