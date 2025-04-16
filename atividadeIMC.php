<?php 

	$alt = 1.57;
	$peso = 48;

	echo "Vamos calcular seu IMC <br/>";
	echo "<br/>";
	echo ("IMC = Peso (Kg) / Altura² <br/>");
	echo "<br/>";
	echo "<br/>";
	echo ("+----------------------------+----------------------------------+ <br/>
		   |_________IMC__________|_____Classificações____| <br/>
		   |_Menor_do_que_18,5_____|_Abaixo_do_peso_normal_| <br/>
		   |18,5_-_24,9_____________|Peso_normal__________| <br/>
		   |25,0 - 29,9           | Excesso de peso       | <br/>
		   |30,0 - 34,9           | Obesidade classe I    | <br/>
		   |35,0 - 39,9           | Obesidade classe II   | <br/>
		   |Maior ou igual a 40,0 | Obesidade classe III  | <br/>
		   +----------------------+-----------------------+ <br/>
	");

	function imc($peso, $alt){
		$IMC = $peso / ($alt**2);

		if ($IMC < 18.5) {
			echo "Seu IMC <br/>" . $IMC . " Esta abaixo do peso normal";
		}
		elseif ($IMC >= 18.5 && $IMC <= 24.9){
			echo "Seu IMC " . $IMC . " Esta com peso normal";
		}
		elseif ($IMC >= 25.0 && $IMC <= 29.9){
			echo "Seu IMC " . $IMC . " Esta com excesso de peso";
		}
		elseif ($IMC >= 30.0 && $IMC <= 34.9){
			echo "Seu IMC " . $IMC . " Esta obesso classe I";
		}
		elseif ($IMC >= 35.0 && $IMC <= 39.9) {
			echo "Seu IMC " . $IMC . " Esta obesso classe II";
		}
		else {
			echo "Seu IMC " . $IMC . " Esta obesso classe III";
		}
	}

	imc($peso, $alt);

 ?>