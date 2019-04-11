<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../loja/css/bootstrap.css">
    <link rel="stylesheet" href="../loja/estilo.css">
    <title>Document</title>
</head>
<body>
<form action="cadastrar_livro.php" method="POST">
    <table class="table">
        <tr>
            <td>Nome do livro:</td>
            <td><input class="form-control" type="text" name="livro"></td>
        </tr>
        <tr>
            <td>Autor:</td>
            <td><input class="form-control" type="text" name="autor"></td>
        </tr>
        <tr>
            <td>Gênero:</td>
            <td><input class="form-control" type="text" name="genero"></td>
        </tr>
        <tr>
         <td><input class="btn btn-primary"  type="submit" value="Cadastrar"></td>
        </tr>
    </table>
'</body>
</html>
<?php include("../loja/rodape.php"); ?>