<?php


$saldo = $_POST['saldo-inicio'];
$taxa = $_POST['taxa'];

$taxaConvertida = $taxa/100;

$valorTaxa = $saldo * $taxaConvertida;
echo "Saldo no início do mês $saldo <br>";

$saldo+=$valorTaxa;

echo "Saldo atualizado $saldo!";

