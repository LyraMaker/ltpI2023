<?php

$nome = readline("Qual é o seu nome? ");

switch (strtoupper($nome)){
    case "MARIA":
        echo "Fala Maria! Como vai?";
        break;
    default:
        echo "Eu só falo com a Maria!";
        break;
}