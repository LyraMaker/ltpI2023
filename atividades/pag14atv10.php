<?php

$nome = readline("Digite o seu nome: ");
$salarioBruto = readline("Digite o seu salário bruto");

$desconto = $salarioBruto * 0.08;

$salarioLiquido = $salarioBruto-$desconto;

echo "Nome: $nome \n";
echo "Salário Bruto: $salarioBruto \n";
echo "Salário Líquido: $salarioLiquido";