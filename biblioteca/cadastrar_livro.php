<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../loja/css/bootstrap.css">
    <link rel="stylesheet" href="../loja/estilo.css">
    <title>Biblioteca</title>
</head>
<body>
    

<?php
$livro=$_POST["livro"];
$autor=$_POST["autor"];
$genero=$_POST["genero"];

$conexao=mysqli_connect('localhost','root', '', 'biblioteca');
function insereLivro( $conexao, $livro, $autor, $genero){
    $query="insert into livros (livro, autor, genero) values('{$livro}', '{$autor}', '{$genero}')";
    return mysqli_query($conexao, $query);
}

if (insereLivro( $conexao, $livro, $autor, $genero)) { ?>  
    <p class="text-success">O livro, <?=$livro?> foi cadastrado com sucesso!
<?php
}
else { 
    $msg=mysqli_error($conexao);
?>    <p class="text-success">O livro, <?=$livro;?> não foi cadastrado</p>". <?=$msg;?>
<?php
}
?>
<form action="index.php">
    <input class="btn btn-primary" type="submit" value="Cadastrar outro livro">
</form>
</body>
</html>