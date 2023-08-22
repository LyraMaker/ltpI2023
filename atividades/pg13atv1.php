<?php

$n1 = readline("Digite a primeira nota: ");
$n2 = readline("Digite a segunda nota: ");
$n3 = readline("Digite a terceira nota: ");

$media = ($n1+$n2+$n3)/3;

$media = round($media,2);

echo "A sua média é $media";