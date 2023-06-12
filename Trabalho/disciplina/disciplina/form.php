<?php require_once "../controla_sessao/controla.php"; ?>
<?php require_once "consultar_por_id.php" ?>
<?php require_once "../template/cabecalho.php";  ?>

<div class="container">
   <h1>Cadastro de Disciplinas</h1>
   <hr>


   <form action="<?php echo isset($disciplina) ? 'atualizar.php' : 'inserir.php' ?>" method="post" enctype="multipart/form-data">

      <label for="codigo" class="form-label">Código</label><br>
      <input class="form-control" type="number" step="0.01" name="codigo" id="codigo" value="<?php echo $disciplina['codigo'] ?? "0.00"; ?>"><br>

      <label for="nome" class="form-label">Nome</label><br>
      <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $disciplina['nome'] ?? ""; ?>"><br>
      <input type="hidden" name="id" id="id" value="<?php echo $disciplina['iddisciplina'] ?? ""; ?>"><br>

      <label for="ementa" class="form-label">Ementa</label><br>
      <textarea class="form-control" name="ementa" id="ementa"><?php echo $ementa['ementa'] ?? ""; ?></textarea><br>

      <label for="carga_horaria" class="form-label">Carga Horaria</label><br>
      <input class="form-control" type="number" step="0.01" name="carga_horaria" id="carga_horaria" value="<?php echo $disciplina['carga_horaria'] ?? "0.00"; ?>"><br>

      <label for="bibliografia" class="form-label">Bibliografia</label><br>
      <textarea class="form-control" name="bibliografia" id="bibliografia"><?php echo $bibliografia['bibliografia'] ?? ""; ?></textarea><br>

      <br>
      <button type="submit" class="btn btn-primary">Cadastrar</button>

   </form>
</div>

<?php require_once "../template/rodape.php";  ?>