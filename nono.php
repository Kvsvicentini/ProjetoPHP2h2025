<?php 

	$nota = 11.0;

	if ($nota < 0.0 && $nota > 10.00) {

		echo "NOTA INVÁLIDA";
	}
	elseif ($nota >= 7.0) {

	 	echo "APROVADO";

	 }else{

		echo "REPROVADO";
		
	}

 ?>