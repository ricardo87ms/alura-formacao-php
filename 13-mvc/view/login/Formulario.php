<?php include __DIR__ . '../../inicio-html.php' ?>
<div class="jumbotron">
    <h1><?= $titulo ?></h1>
</div>
<form method="post" action="/realiza-login">
    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="senha">Senha</label>
        <input type="password" id="senha" name="senha" class="form-control">
    </div>
    <button class="btn btn-primary">Entrar</button>
</form>
<?php include __DIR__ . '../../fim-html.php' ?>