<!DOCTYPE html>
<html>
<head>
	<title>Login Usuario</title>
</head>
<body>
	<h1>Cadastrar-se</h1>
	<form action="Pag_01.php" method="post">
		<p>
			Informe seu nome:<input type="text" name="nome" size="30"><br>
			Informe seu sobrenome:<input type="text" name="sobrenome" size="30"><br>
			Informe a data de nascimento:
			<input type="text" name="dia" size="1" maxlength="2">
			<input type="text" name="mes" size="1" maxlength="2">
			<input type="text" name="ano" size="2" maxlength="4"><br>
			informe a data atual:
			<input type="text" name="dia_a" size="1" maxlength="2">
			<input type="text" name="mes_a" size="1" maxlength="2">
			<input type="text" name="ano_a" size="2" maxlength="4"><br>
			Informe sua profissão:<input type="text" name="profissao" size="30"><br>
			Informe o curso que vc quer fazer:<input type="text" name="curso" size="30"><br>
			Informe seu email:<input type="text" name="email" size="30"><br>
			Informe sua senha:<input type="password" name="senha" size="30"><br>
				<input type="submit" value="Enviar" name="botao"><br>
		</p>
	</form>

</body>
</html>
