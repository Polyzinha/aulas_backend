<?php
    include_once "../template/cabecalho.php";
    include_once "../disciplina/consultar_todos.php";
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
    
        <?php 
          $disciplinas = [];
          foreach($disciplinas as $key => $value): 
            if(!in_array($value["categoria"], $disciplinas)): 
              $disciplinas[] = $value["categoria"];
        ?>
          <li class="nav-item">
            <a class="nav-link" 
            href="index.php?categoria=<?= $value["categoria"]; ?>">
               <?php echo $value["categoria"]; ?>
            </a>
          </li>

        <?php 
           endif;
           endforeach; 
       ?>

        <li class="nav-item">
            <a class="nav-link" href="../disciplina/index.php">
               Acesso Restrito
            </a>
        </li>
        
      
      </ul>
      </form>
    </div>
  </div>
</nav>
     

<hr>

<div class="container">
    <div class="row row-cols-4 g-3">

    <?php foreach($disciplinas as $key => $disciplina):  ?>
              <h5 class="card-title" ><?php echo $disciplina["nome"]; ?></h5>
              <a href="#" class="btn btn-primary">Ver disciplinas</a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>

    </div>
</div>

<hr>


<?php
    include_once "../template/rodape.php";
?>
