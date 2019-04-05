<?php include("cabecalho.php");
 include("conecta.php");
 include("banco_produto.php");?>


<?php
    if (array_key_exists("removido", $_GET) && $_GET["removido"]=="true") {
?>
        <p class="alert-success"> Produto removido.</p>
<?php
    }
?>

<!-- <h1 style="tex-align: center; color: blue; font-family:">Lista de Produtos</h1> -->
<table class="table table-striped table-bordered">
    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto){
    ?>
    <tr>
        <td><?=$produto ['nome']?></td>
        <td><?=$produto ['preco']?></td>
        <td><?=$produto ['descricao']?></td>
        <td><a href="produto_del.php?id=<?=$produto['id']?>" class="text-danger">remover</a></td>
    </tr>
    <?php
        }
    ?>
</table>

<?php include("rodape.php")?>