<?php 

	$nomes = array('MA' => "Maria", "ZE" => "José", "PE" => "Pedro", "AN" => "Ana");
	//$chave = array_kyes($nomes);

	while ($chave = key($nomes)){

		echo "<br/>".$chave;

		next($nomes);
	}




	//echo "<br/> Next:".next($nomes);
	//echo "<br/> End:".end($nomes);
	//echo "<br/> Prev:".prev($nomes);
	//echo "<br/> Reset:".reset($nomes);

	//foreach($chaves as $item) {
		
	//	echo "<br/>".$item;
	//}
	//echo "<br/>";

	//função para imprimir dados de um vetor

	//print_r($chaves);

 ?>