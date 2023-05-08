<?php
    echo "Digite um valor: ";
    $value = readline();
    $soma = 0;
    for ($i=0; $i < $value/2 ; $i++) { 
        if($value % $i == 0){
            $soma += 1;
        }
    }

    $x = $soma == $value ? "Perfeito" : "Não é perfeito";
    echo $x;