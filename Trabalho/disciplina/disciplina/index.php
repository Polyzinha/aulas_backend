<?php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_todos.php"; ?>
<?php require_once "../template/cabecalho.php";  ?>

<div class="container">
    <h1>Disciplinas</h1>
    <hr>
    <div class="text-end">
        <a href="form.php" class="btn btn-success">
            Inserir Disciplina
        </a>
    </div>

    <table class="table" id="myTable">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Ementa</th>
                <th scope="col">Carga Horária</th>
                <th scope="col">Bibliografia</th>
                <th scope="col" width="25%">Ações</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($disciplinas as $disciplina) { ?>
                <tr>
                    <th scope="row"><?php echo $disciplina['codigo']; ?></th>
                    <th scope="row"><?php echo $disciplina['nome']; ?></th>
                    <th scope="row"><?php echo $disciplina['ementa']; ?></th>
                    <th scope="row"><?php echo $disciplina['carga_horaria']; ?></th>
                    <th scope="row"><?php echo $disciplina['bibliografia']; ?></th>

                    <td class="text-end">
                        <a href="excluir.php?id=<?php echo $disciplina['iddisciplina']; ?>" class="btn btn-danger"><i class="fa-regular fa-trash-can"></i> Excluir</a>
                        <a href="form.php?id=<?php echo $disciplina['iddisciplina']; ?>" class="btn btn-primary"><i class="fa-regular fa-pen-to-square"></i> Atualizar</a>
                    </td>
                </tr>
            <?php } ?>


        </tbody>
    </table>

</div>
    
  <?php require_once "../template/rodape.php";  ?>