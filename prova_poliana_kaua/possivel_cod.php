<?php require_once "matriz.php";

if(isset($_POST['nome'])){
$livros[] = [
 "ISBN" =>  $_Post['ISBN'],
 "Título" =>  $_Post['Título'],
 "Autor" =>  $_Post['Autor']
];
foreach ($_POST as $key => $value) 
    echo "$key : $value <br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
</head>
<body>
<table border= "1" width="100%">
    <tr>
        <th>ISBN</th>
        <th>Título</th>
        <th>Autor</th>
    </tr>
    <?php foreach($livros as $key => $livro) {?>
    <tr>
        <td> <?php echo $livro ["ISBN"] ?> </td>
        <td> <?php echo $livro ["Título"] ?> </td>
        <td> <?php echo $livro ["Autor"] ?> </td>
        <td>
            <a href="tabela.php?id=<?php echo $key; ?> ">
            Excluir
        </a>
        </td>
    </tr>
    <?php } ?>
</table>
</html>




<?php require_once "matriz.php";

if(isset($_POST["ISBN"]) && isset($_POST["Tìtulo"]) 
           && isset($_POST["Autor"]))
{

$nome =      $_POST["ISBN"];
$descricao = $_POST["Tìtulo"];
$preco =     $_POST["Autor"];
$foto = $nome_arquivo;

//String com o comando SQL para ser executado no DB
$sql = "INSERT INTO `produto`(`ISBN`, `Tìtulo`, `Autor`) 
        VALUES (?, ?, ?, ?);";

//Prepara o SQL para ser executado no banco de dados
$comando = $conexao->prepare($sql);

//adiciona os valores nos parâmetros
$comando->bind_param("dss", $ISBN, $Tìtulo, $Autor);

//executa o SQL - Comando no Banco de Dados
$comando->execute();

}
require_once "tabela.php";
