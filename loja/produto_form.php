<?php include("cabecalho.php");?>
        <h1>Cadastrar Produto</h1>
<form action="adiciona_produto.php">
    <table class="table">
        <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome"></td>
        </tr>
        <tr>
            <td>Preço:</td>
            <td><input class="form-control" type="number" name="preco"></td>
        </tr>
        <tr>
            <td>Descrição:</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
        </tr>
        <tr>
         <td><input class="btn btn-primary"  type="submit" value="Cadastrar"></td>
        </tr>
    </table>
</form>
<?php include("rodape.php")?>