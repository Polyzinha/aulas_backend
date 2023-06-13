 <?php require_once "../conexao.php";

    $codigo =        $_POST["codigo"];
    $nome =      $_POST["nome"];
    $ementa = $_POST["ementa"];
    $carga_horaria =     $_POST["carga_horaria"];
    $bibliografia =        $_POST["bibliografia"];
   
    $sql = "INSERT INTO disciplina (`codigo`, `nome`, `ementa`, `carga_horaria`, `bibliografia`) VALUES (?,?,?,?,?);";

    $comando = $conexao->prepare($sql);

    $comando->bind_param("issss", $codigo, $nome, $ementa, $carga_horaria, $bibliografia);

    $comando->execute();

    header("location: index.php");
