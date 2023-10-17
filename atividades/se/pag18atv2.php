<?php

$numero1 = readline("Primeiro número: ");
$numero2 = readline("Segundo número: ");

if($numero1 > $numero2){
    echo "O $numero1 é o maior!";
} else if ($numero1 < $numero2){
    echo "O $numero2 é o maior!";
} else {
    echo "Os números são iguais!";
}