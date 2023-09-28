<?php

$nome = readline("Qual é o seu nome? ");

if (strtoupper($nome) == "MARIA") { //strtoupper() é uma função que deixa as letras
                                    //em caixa alta
    echo "Fala Maria! Como vai?";}
    else 
    echo "Eu só falo com a Maria!";

