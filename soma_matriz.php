<?php 

	echo "Está é a matriz A <br/>";

	$matriz_A = array(
		array(0 => 25, 1 => 12, 2 => 35),
		array(0 => 85, 1 => 47, 2 => 98),
		array(0 => 32, 1 => 38, 2 => 105),
	 );

	echo "<pre>";
	print_r($matriz_A);
	echo "<pre>";
	
	echo "<br/>";

	echo "Está é a matriz B <br/>";

	$matriz_B = array(
		array(0 => 98, 1 => 65, 2 => 35),
		array(0 => 5, 1 => 27, 2 => 8),
		array(0 => 74, 1 => 14, 2 => 3),
	 );

	echo "<pre>";
	print_r($matriz_B);
	echo "<pre>";

	$matriz_resultado = array();

	for ($linha= 0; $linha <= 2; $linha++) { 
		for ($coluna = 0; $coluna  <= 2; $coluna++) { 
			$matriz_resultado[$linha][$coluna] = $matriz_A[$linha][$coluna] + $matriz_B[$linha][$coluna];
		}
	}

	echo "<br/>";
	echo "A soma das matrizes deu: <br/>";
	echo "<pre>";
	print_r($matriz_resultado);
	echo "<pre>";

 ?>