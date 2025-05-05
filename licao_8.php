<?php
 
$usuario = "Professor";
$titulolivro = "O Hobbit";
 
function acessarSistema($usuario, $titulolivro){
    if(strtolower($usuario) == 'aluno'){
        echo "O aluno pegou emprestado o livro " . $titulolivro . "<br>";
        echo "O aluno deverá devolver o livro em 3 Dias <br>";
        return true;
    } else {
        echo "O Professor pegou emprestado o livro " . $titulolivro . "<br>";
        echo "O Professor deverá devolver o livro em 7 Dias <br>";
        return false;

    }
}
 
acessarSistema($usuario, $titulolivro);
 
?>