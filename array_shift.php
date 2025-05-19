<?php 

$nomes = array("Kauã", "Maria", "José", "Pedro");

 $excluido= array_pop($nomes);

 foreach ($nomes as $item){

 	echo "<br/>" . $item;
 }
echo "<br/><br/> Nome removido: " .$excluido;

 ?>