<?php
 
    $n1 = 45;
    $n2 = 78;
    $n3 = 34;
    $n4 = 92;
    $n5 = 12;
    $n6 = 0; 
 
    $maior = 0;
    $i = 0;
 

    while (true) {
    
        if ($i == 0) $num = $n1;
        elseif ($i == 1) $num = $n2;
        elseif ($i == 2) $num = $n3;
        elseif ($i == 3) $num = $n4;
        elseif ($i == 4) $num = $n5;
        elseif ($i == 5) $num = $n6;
        else break;
 
    if ($num == 0) break;
 
    if ($maior == null || $num > $maior) {
        $maior = $num;
    }
 
    $i++;
}
 
echo "O maior número é: $maior <br/>";
 
?>