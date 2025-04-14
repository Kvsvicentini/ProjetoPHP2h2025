<?php

	 $num1 = 10;
	 $num2 = 20;
	 $escolha = 2;

	 echo "Menu: <br/> 1 - Somar <br/> 2 - multiplicar <br/> 3 - subtrair <br/> 4 - Dividir";

	 function somar($num1, $num2){
	 	$result = $num1 + $num2;
	 	echo "O resultado da operação é: " . $result;
	 }

	 function mult($num1, $num2){
	 	$result = $num1 * $num2;
	 	echo "O resultado da operação é: " . $result;
	 }

	 function sub($num1,$num2){
	 	$result = $num1 - $num2;
	 	echo "O resultado da subtração é " . $result;

	 }

	 function div($num1,$num2){
	 	$result = $num1 / $num2;
	 	echo " O resultado da divisao é " . $result;
	 }


	 if ($escolha == 1) {
	 	somar($num1, $num2);
	 }
	 elseif ($escolha == 2) {
	 	mult($num1, $num2);
	 }
	 elseif ($escolha == 3) {
	 	sub($num1, $num2);
	 }
	 elseif ($escolha == 4) {
	 	div($num1, $num2);
	 }
	 else {
	 	echo "Opção inválida";
	 }

 ?>