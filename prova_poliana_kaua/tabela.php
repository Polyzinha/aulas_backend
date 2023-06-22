<?php require_once "matriz.php"?>
<!DOCTYPE html>
<html lang="en">

<head>

<body>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova</title>
    </head>
    <table border="1" width="100%">
        <tr>
            <th>ISBN</th>
            <th>Título</th>
            <th>Autor</th>
        </tr>
        <?php foreach ($livros as $key => $livro) { ?>
            <tr>
                <td> <?php echo $livro["ISBN"] ?> </td>
                <td> <?php echo $livro["Título"] ?> </td>
                <td> <?php echo $livro["Autor"] ?> </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>