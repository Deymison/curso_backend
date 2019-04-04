<?php include("cabecalho.php");
 include("conecta.php");
 include("banco_produto.php");?>







    <?php
        $produtos = listaProdutos($conexao);
        foreach($produtos as $produto){
            echo $produto ['nome']. "<br>";
        }
    
    ?>
<?php include("rodape.php")?>