<!DOCTYPE html>
<html 	lang="pt-br"> 
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1>Formulário PHP</h1>
	<form action="resposta.php" method="POST">
		<label for="nome">Nome:</label>
		<input type="text" name="nome" id="nome"
		placeholder=" Insira seu nome"
		maxlength="50" size ="50"
		required autocomplete="off">
		<br>
		<label for="email">E-mail:</label>
		<input type="email-mail" name="email" id="email" 
		placeholder="Insira o seu E-mail"
		maxlength="50" size="50" 
		required autocomplete="off">
		<br>
		<input type="submit" name="enviar" value="Entrar">
		<input type="reset" name="limpar" value="limpar">
		
	</form>
	<a href="">Enviar</a>
</body>
</html>


