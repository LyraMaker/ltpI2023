<?php

$nome = readline("Digite o nome do aluno: ");
$nota1 = readline("Digite o valor da primeira nota: ");
$nota2 = readline("Digite o valor da segunda nota: ");
$nota3 = readline("Digite o valor da terceira nota: ");

$media = calcularMedia($nota1,$nota2,$nota3);
$conceito = verificarAprovacao($media);

echo "\nNome: $nome \nMédia: $media | Conceito: $conceito";

function calcularMedia($n1,$n2,$n3){
    $media = ($n1+$n2+$n3)/3;
    return $media;
}

function verificarAprovacao($m){
    if($m>= 9){
        $conceito = "A";
    }else if((9 > $m) && ($m >= 7)){
        $conceito = "B";
    }else if((7 > $m) && ($m >= 5)){
        $conceito = "C";
    }else if((5 > $m) && ($m >= 3)){
        $conceito = "D";
    }else if($m < 3){
        $conceito = "E";
    }
    return $conceito;
}
