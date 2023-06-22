<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php"; ?>

<div class="container">
    <h1>Disciplinas</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">
            Inserir disciplina
        </a>
    </div>

    <table class="table" id="mytable">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Ementa</th>
                <th scope="col">Carga Horaria</th>
                <th scope="col">Bibliografia</th>
                <th scope="col" width="15%" >Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($disciplinas as $disciplina) { ?>
                <tr>
                    <td><?php echo $disciplina['codigo']; ?></td>
                    <td scope="row"><?php echo $disciplina['nome']; ?></td>
                    <td scope="row"><?php echo $disciplina['ementa']; ?></td>
                    <td><?php echo $disciplina['carga_horaria']; ?></td>
                    <td scope="row"><?php echo $disciplina['bibliografia']; ?></td>

                    <td class="text-end">
                        <a href="excluir.php?codigo=<?php echo $disciplina['codigo']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> </a>
                        <a href="form.php?codigo=<?php echo $disciplina['codigo']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> </a>
                    </td>
                </tr>
            <?php } ?>


        </tbody>
    </table>



</div>