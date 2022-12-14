<?php 
    $nome = 'yuri';
    $idade = 18;
    $frase = 'meu nome é ';
    $classe = 'box';
    define('NOME','yuri');
    #echo 'meu nome é '.$nome.' ,eu tenho '.$idade.' anos'; //aspas simples('') precisam do ponto(.) para a concatenação
    #echo $frase.NOME;
    #echo $frase.$nome;
    #echo "meu nome é $nome"; //aspas duplas("") não precisam do ponto(.) para a concatencao
    echo "<div class=\"$classe\">Meu conteudo da box</div>";
    
?>