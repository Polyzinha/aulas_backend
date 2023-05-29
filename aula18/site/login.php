<?php include_once "../template/cabecalho.php"; ?>

<div class="container">
<form action="verifica_login.php" method="post">
<label for="login" class="form-label">Usuário</label>
<input type="text" name="usuario" class="form-control">

<label for="login" class="form-label">Senha</label>
<input type="password" name="senha" class="form-control">

<button type="submit" class="btn btn-primary">Entrar</button>
</form>
</div>
<?php include_once "../template/rodape.php"; ?>