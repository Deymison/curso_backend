<?php include("cabecalho.php");?>
        <h1>Cadastrar Produto</h1>
<form action="adiciona_produto.php">
    Nome:
    <input type="text" name="nome"><br>
    Preço:
    <input type="number" name="preco"><br>
    <input type="submit" value="Cadastrar">
</form>
<?php include("rodape.php")?>