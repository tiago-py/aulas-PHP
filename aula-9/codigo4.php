<?php
    echo "Digite um valor: \n";
    $soma = 0;

    while($soma <= 100 ){
        $valor = readline();
        $soma += $valor;

    }

    echo "Soma dos valores entrados pelo usuarios: $soma \n";
