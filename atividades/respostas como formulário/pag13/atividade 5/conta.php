<?php

$numero = $_POST['numero'];
$saldo = $_POST['saldo'];
$deposito = $_POST['deposito'];
$saque = $_POST['saque'];

echo "<strong>Número da conta -></strong> $numero <br>";
echo "<strong>Saldo antes das operações -></strong> R$$saldo <br>";

$saldo += $deposito;
$saldo -= $saque;

echo "<strong>Saldo atualizado -></strong> R$$saldo";

