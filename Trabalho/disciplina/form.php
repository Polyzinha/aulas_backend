<?php require_once "consultar_por_id.php" ?>

<div class="container">
   <h1>Cadastro de Disciplinas</h1>
   <hr>


   <form action="<?php echo isset($produto) ? 'atualizar.php' : 'inserir.php' ?>" method="post" enctype="multipart/form-data">

   <input type="hidden" name="codigo" id="codigo" 
       value="<?php echo $usuario['iddisciplina'] ?? ""; ?>"><br>

      <label for="nome" class="form-label">Nome</label><br>
      <input class="form-control" type="text" name="nome" id="nome" value="<?php echo $disciplina['nome'] ?? ""; ?>"><br>
      <input type="hidden" name="id" id="id" value="<?php echo $disciplina['iddisciplina'] ?? ""; ?>"><br>

      <label for="ementa" class="form-label">Ementa</label><br>
      <textarea class="form-control" name="ementa" id="ementa"><?php echo $disciplina['ementa'] ?? ""; ?></textarea><br>

      <label for="carga_horaria" class="form-label">Carga Horaria</label><br>
      <input class="form-control" type="number" step="0.01" name="carga_horaria" id="carga_horaria" value="<?php echo $disciplina['carga_horaria'] ?? "0.00"; ?>"><br>

      
      <label for="bibliografia" class="form-label">Bibliografia</label><br>
      <textarea class="form-control" name="bibliografia" id="bibliografia"><?php echo $disciplina['bibliografia'] ?? ""; ?></textarea><br>

      <br>
      <button type="submit" class="btn btn-primary">Cadastrar</button>

   </form>
</div>
