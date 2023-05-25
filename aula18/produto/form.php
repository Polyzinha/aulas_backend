<?php require_once "consultar_por_id.php" ?>

<?php require_once "../template/cabecalho.php"; ?>

<div class="container">
    <h1>Cadastro de Produto</h1>
    <hr>

    <form 
    action="<?php echo isset($produto) ? 'atualizar.php' : 'inserir.php' ?>" 
    method="post"
    enctype="multipart/form-data"
    >
        <label for="nome">Nome</label><br>
        <input class= "form-control" type="text" name="nome" id="nome" value="<?php echo $produto['nome'] ?? ""; ?>"><br>

        <input type="hidden" name="id" id="id" value="<?php echo $produto['idproduto'] ?? ""; ?>"><br>

<br>
        <label for="descricao" class = "form-label">Descrição</label><br>
        <textarea name="descricao" id="descricao"> <?php echo $produto['descricao'] ?? ""; ?></textarea><br>
<br>
        <label for="preco" class = "form-label">Preço</label><br>
        <input class= "form-control" type="number" step="0.01" name="preco" id="preco" value="<?php echo $produto['preco'] ?? ""; ?>"><br>
<br>
        <label for="foto" class = "form-label">Foto</label><br>
        <input class= "form-control" type="file" name="foto" id="foto"><br>

<br>
        <button class= "btn btn-info" type="submit">Cadastrar</button>
        <br>
</form>
</div>
<?php require_once "../template/rodape.php"; ?>