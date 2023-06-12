<?php require_once "consultar_todos.php"; ?>

<div class="container">
    <h1>Disciplinas</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">
            Inserir disciplina
        </a>
    </div>

    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Ementa</th>
                <th scope="col">Carga Horaria</th>
                <th scope="col">Bibliografia</th>
                <th scope="col width=" 25%"">Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($disciplinas as $disciplina) { ?>
                <tr>
                    <td><?php echo $disciplina['codigo']; ?></td>
                    <th scope="row"><?php echo $disciplina['nome']; ?></th>
                    <th scope="row"><?php echo $disciplina['ementa']; ?></th>
                    <td><?php echo $disciplina['carga_horaria']; ?></td>
                    <th scope="row"><?php echo $disciplina['bibliografia']; ?></th>

                    <td class="text-end">
                        <a href="excluir.php?codigo=<?php echo $disciplina['codigo']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a><br>
                        <a href="form.php?codigo=<?php echo $disciplina['codigo']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                    </td>
                </tr>
            <?php } ?>


        </tbody>
    </table>



</div>