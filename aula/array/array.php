<?php

$nomes1 = array("Anderson","Ricardo","Fabíula","Damares");
$nomes2 = ["Fabrícia","Eudir","Gustavo","Gabriela"];

$turma1 = array(
    "Nome" => "2° período de Informática",
    "Periodo" => "Manhã"
);

$turma2 = [
    "Nome" => "4° período de Informática",
    "Periodo" => "Manhã",
    "Alunos" => ["Arthur", "Giulia", "Ingrid", "João Victor", "Bruno"]
];
echo $nomes1[3].PHP_EOL;
echo $nomes2[1].PHP_EOL;

echo $turma1['Nome'].PHP_EOL;
echo $turma1['Periodo'].PHP_EOL;

echo $turma2['Alunos'][0];