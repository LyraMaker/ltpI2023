<?php
$nomes = ['Gabriel', 'Suélen', 'Lígia', 'Fernando', 'Jeferson'];
$turmas = [
    [
        'nome' => '2° período',
        'quantidade' => 22
    ],
    [
        'nome' => '4° período',
        'quantidade' => 35
    ]
];


for ($i = 0; $i < count($nomes);$i++){
    echo $nomes[$i]." é uma pessoa legal! \n";
} 

foreach($nomes as $nome){
    echo $nome."\n";
} 

foreach ($turmas as $turma) {
    echo "A turma {$turma['nome']} possuir {$turma['quantidade']} \n";
}