<?php
include "dados.php";

if(isset($_GET['id'])){
    $id = $_GET ['id'];
    unset($_GET[$id]);

}
if(isset($_POST['nome'])){
$alunos[] = [
 "RA" =>  $_Post['RA'],
 "Nome" =>  $_Post['Nome'],
 "turma" =>  $_Post['turma']
];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border= "1" width="100%">
    <tr>
        <th>RA</th>
        <th>Nome</th>
        <th>Turma</th>
        <th>Açôes</th>
    </tr>
    <?php foreach($alunos as $key => $aluno) {?>
    <tr>
        <td> <?php echo $aluno ["RA"] ?> </td>
        <td> <?php echo $aluno ["Nome"] ?> </td>
        <td> <?php echo $aluno ["turma"] ?> </td>
        <td>
            <a href="tabela.php?id=<?php echo $key; ?> ">
            Excluir
        </a>
        </td>
    </tr>
    <?php } ?>
</table>
</html>