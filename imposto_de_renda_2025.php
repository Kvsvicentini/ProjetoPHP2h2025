<?php 

	$usuario = 'João';
	$salario_bruto = 13250;
	$salario_anual = $salario_bruto * 12;

	
	function imposto_de_renda($usuario, $salario_anual){

		if ($salario_anual >= 26963,21 || $salario_anual <= 33919,80) {

			$aliquota = 7,5;

			$IR = $salario_anual * ($aliquota / 100);
			
		}
		elseif ($salario_anual >= 33919,81$salario_anual <= 45012,60) {
		  	
		  	$aliquota = 15;

			$IR = $salario_anual * ($aliquota / 100);

		}
		elseif (

		}
		elseif ($salario_anual <= 55976.16) {

		   	$aliquota = 22.5;

			$IR = $salario_anual * ($aliquota / 100);

		}
		elseif ($salario_anual > 55976.16) {

		    $aliquota = 27.5;

			$IR = $salario_anual * ($aliquota / 100);

		} 
			
		

	
























	
imposto_de_renda($usuario, $salario_anual);


 ?>