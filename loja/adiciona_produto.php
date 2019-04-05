<?php include("cabecalho.php");
include("banco_produto.php");?>

<?php
$nome=$_GET["nome"];
$preco=$_GET["preco"];
$descricao=$_GET["descricao"];

$conexao=mysqli_connect('localhost','root', '', 'loja');
if (insereProduto($conexao, $nome, $preco, $descricao)) { ?>
    <p class="text-success">O produto <?= $nome;?>, com preço R$ <?=$preco?> foi adicionado com sucesso!</p>
<?php } else { 
    $msg=mysqli_error($conexao)?>
    <p class="alert-danger">O produto <?=$nome?> não foi adicionado: <?=$msg?></p>
<?php
}
?>
<?php include("rodape.php"); ?>