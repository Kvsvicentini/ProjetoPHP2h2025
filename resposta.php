<?php 

	$user_nome = $_POST['nome'];
	$user_email = $_POST['email'];

	echo "Seu nome é $user_nome e seu e-mail é $user_email <br/>";
	echo "<br/> Você escolheu a linguagem: <br/>";

	if (isset($_POST['python'])) {
		echo ("Python <br/>");
	}
	if (isset($_POST['java'])) {
		echo ("Java <br/>");
	}
	if (isset($_POST['php'])) {
		echo ("PHP <br/>");
	}

	echo "<br/> Seu estado civil é: ";

	if (isset($_POST["escolha"])) {
		echo $_POST['escolha'];
	}

	echo "<br/>";
	echo "<br/> Recuperando valores das inputs escondidas: <br/>";

	$user = $_POST['user'];
	$nivel = $_POST['nivel'];

	echo "<br/> Seu usuário é $user e seu nível é $nivel <br/>";

	echo "<br/>";
	echo "Estado selecionado: <br/>";
	echo "O estado selecionado foi " . $_POST['estado'] . "<br/>";

	echo "<br/>Recuperando a mensagem: <br/>";
	echo "Sua mensagem foi: " . $_POST['msg'] . "<br/>";

 ?>