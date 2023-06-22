<?php require_once "matriz.php"?>

  <div class="container">
    <hr>
    <div class="text-end">
      <a href="form.php" class="btn btn-success">
        Inserir Livros
      </a>
    </div>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">ISBN</th>
          <th scope="col">Tìtulo</th>
          <th scope="col">Autor</th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($Livros as $Livro) { ?>
          <tr>
            <th scope="row"><?php echo $Livro['ISBN']; ?></th>
            <td><?php echo $Livro['Tìtulo']; ?></td>
            <td><?php echo $Livro['Autor']; ?></td>
          </tr>
        <?php } ?>


      </tbody>
    </table>



  </div>


  <?php require_once "../template/rodape.php"; ?>

require_once "tabela.php"?>