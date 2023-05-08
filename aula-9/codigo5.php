<?php

    $soma = 0;


    do{
        echo "Digite um valor: \n";
        $valor = readline();
        $soma+=$valor;
    }while($valor !=0);

    echo "Valor da soma dos numeros digitados pelo usuario: $soma";