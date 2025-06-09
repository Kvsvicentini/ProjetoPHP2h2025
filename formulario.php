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
		<input type="reset" name="limpar" value="limpar">

		<h2>Escolha uma linguagem de programação</h2>
		  <input type="checkbox" id="java" name="java" value="Java">
		  <label for="java"> JAVA</label><br>
		  <input type="checkbox" id="python" name="python" value="Python">
		  <label for="python"> PYTHON</label><br>
		  <input type="checkbox" id="php" name="php" value="PHP">
		  <label for="php"> PHP</label>

		  <h3>Qual o seu estado civil?</h3>
		  <input type="radio" id="estado_1" name="escolha" value="Casado">
		  <label for="escolha"> Casado</label><br>
		  <input type="radio" id="estado_2" name="escolha" value="Solteiro">
		  <label for="escolha"> Solteiro</label><br>
		  
		  <h2>Inputs escondidas</h2>

		  <input type="hidden" name="user" value="admin"><br>
		  <input type="hidden" name="nivel" value="2"><br>

		  <h2>Escolha um estado</h2>
		  <select name="estado">
		  	<option value="SP">São Paulo</option>
		  	<option value="MG">Minas Gerais</option>
		  	<option value="BA">Bahia</option>
		  	<option value="CE">Ceará</option>
		  	<option value="RJ">Rio de Janeiro</option>
		  </select>

		  <h2>Deixe a sua mensagem</h2>
		  <br>
		  <textarea name="msg" cols="50" rows="8">
		  	
		  </textarea>

		  <input type="submit" name="enviar" value="Entrar">

	</form>
	<a href="">Enviar</a>
</body>
</html>


