<?php
    $nome  = 'yuri';
    $nome2 = 'sousa';
    //um sinal de igual significa atribuição de valor
    //sempre será verdadeiro
    /*
    if($nome = $nome2){
        print("são iguais");
    }
    */

    // dois sinais de igual(==) verifica se são iguais em valor
    if($nome == $nome2){
        echo 'verdade';
    }
    //verifica se são diferenteso
    if($nome != $nome2){
        echo 'verdade';
    }

    // === verifica se são identicos, iguais e tipo e valor
    // !== verifica se são diferentes em tipo e valor
?>