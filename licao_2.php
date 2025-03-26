<?php 
	$num_1 = 10;

	if ($num_1 %10 == 0){
		echo ("Ele é divisível por 10");
	}
	elseif($num_1 %5 == 0){
		echo ("Ele é divisível por 5");
	}
	elseif($num_1 %2 == 0){
		echo ("Ele é divisível por 2");
	}
	else{
		echo ("Ele não é divisível por nenhum dos números");
	}
 ?>