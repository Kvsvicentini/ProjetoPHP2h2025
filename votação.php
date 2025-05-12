<?php 

$idade = 16;

include("cabecalho.php")


if($idade <= 16){
	include("votacao_menor.php");

}
elseif($idade < 18){

	 include("Votacao_16.php");
	
}
else{
	include("votacao_maior.php");
}
include("rodape.php");

 ?>
