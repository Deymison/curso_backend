<!DOCTYPE html>
<html>
<head>
	<title>Aprndendo formularios</title>
</head>
<body>
	<form action="apre_form03.php">
		<h2>Qual o curso que você quer aprender?</h2>
		<p>
			<input type="radio" name="curso" value="logica">Lógica de Programação <br>
			<input type="radio" name="curso" value="logica"> Java Scrypt <br>
			<input type="radio" name="curso" value="logica"> MySql <br>
			<input type="radio" name="curso" value="logica"> PHP <br>
			<input type="radio" name="curso" value="logica"> Linguagem C# <br>
		</p>
		<h2>Qual a melhor linguagem de programação?</h2>
		<p>
			<select name="melhorLinguagem" size="1">
				<option value="PHP"> PHP</option>
				<option value="Java Script"> Java Scrypt</option>
				<option value="Linguagem C"> Linguagem C</option>
				<option value="Linguagem C#"> Linguagem C#</option>
			</select>
		</p>

		<h2>Deixe seus dados para contato</h2>
		<p>
			nome<input type="text" name="nome" size="35" maxlength="100"> <br>
			Fone<input type="text" name="telefone" size="35" maxlength="100"> <br>
			email<input type="text" name="email" size="35" maxlength="100"> <br>
			senha<input type="password" name="senha" size="35" maxlength="100"> <br>
		</p>
		<p>
			<h3><input type="checkbox" name="notificações" value="noticias">Desejo receber notifições do site</h3>
		</p>
		<p>
			<input type="submit" value="enviar dados">
			<input type="submit" value="limpar dados">
		</p>
		<h2>Deixe seu comentário abaixo</h2>
		<p>
			<textarea name="comntarios" rows="6" cols="40"></textarea>
		</p>

	</form>

</body>
</html>
