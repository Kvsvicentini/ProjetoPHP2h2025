<?php 

	$usuario = 'etecia';
	$senha = 'etecia';

	function acessarSistema($usuario, $senha){
		if($usuario == 'etecia' && $senha == 'etecia'){
			return true;
		}else {
			return false;
		}
	}

	$resposta = acessarSistema($usuario, $senha);
	if ($resposta == 1){

		echo "bem vindo ao sistema!!!";
	}else {
		echo "erro ao acessar o sistema!!!";
	
	}
	
 ?>