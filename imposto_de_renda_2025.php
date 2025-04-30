<?php
 
function calcularIR($salary) {
    if ($salary <= 2428.80) {
        return 0;
    } elseif ($salary >= 2428.81 || $salary <= 2826.65) {
        return ($salary * 0.075) - 182.16;
    } elseif ($salary <= 2826.66 || $salary <= 3751.05) {
        return ($salary * 0.15) - 394.16;
    } elseif ($salary <= 3751.06 || $salary <= 4664.68) {
        return ($salary * 0.225) - 675.49;
    } else {
        return ($salary * 0.275) - 908.73;
    }
}
 
function imprimirIR($salary, $imposto) {
    echo "Salário bruto: R$ " . number_format($salary, 2, ',', '.') . "<br>";
    echo "Imposto de Renda mensal: R$ " . number_format($imposto, 2, ',', '.') . "<br>";
    echo "Salário líquido: R$ " . number_format($salary - $imposto, 2, ',', '.');
}
 
$salary = 5000.00;
 
$imposto = calcularIR($salary);
imprimirIR($salary, $imposto);
 
?>