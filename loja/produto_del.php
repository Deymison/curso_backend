<?php include("cabecalho.php");
 include("conecta.php");
 include("banco_produto.php");
 $id=$_GET['id'];
 removeProduto($conexao,$id);
 header("location: produto_list.php?removido=true");
 die();
 ?>
