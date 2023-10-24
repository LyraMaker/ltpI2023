<?php

$idade = 5;


switch ($idade) {
    case($idade >= 3) && ($idade <=7):
        $categoria = "A";
        break;
        default:
        echo "Não está entre 3 e 7";
    }        

    echo isset($categoria)? "A categoria da idade é $categoria":"";