<?php include "cabecalho.php"; ?>

<h1>Cadastrar nova tarefa</h1>
<form method="post" action="novo-salvar.php">
    <label for="titulo">Titulo</label>
    <input type="text" name="titulo" id="titulo" required maxlength="100" >
    <label for="descricao">Descrição</label>
    <textarea name="descricao" id="descricao"></textarea>
    <button type="submit" class="btn btn-info">Salvar nova tarefa</button>
</form>
<?php include "rodape.php"; ?>