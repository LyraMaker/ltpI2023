<?php
$idade1 = readline("Primeira idade: ");
$idade2 = readline("Segunda idade: ");
$idade3 = readline("Terceira idade: ");

if(($idade1 > $idade2) && ($idade1 > $idade3)){
    echo "A primeira idade é a maior.";
} else if(($idade2 > $idade3) && ($idade2 > $idade1)){
    echo "A segunda idade é a maior.";
} else if(($idade3 > $idade1) && ($idade3 > $idade2)){
    echo "A terceira idade é a maior.";
} 