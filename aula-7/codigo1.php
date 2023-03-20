<?php
 
    $idade = readline("Digite sua idade: \n");

    $salario = readline("Digite seu salario em reais: \n");

    $sexo = readline("Digite seu sexo M [Masculino] F [Feminino]: \n");

    switch($sexo){
        case 'm':
        case 'M':
            if($idade < 30){
                $aumento = $salario * 0.15;
                break;
            }
            $aumento = $salario * 0.25;
            break;
            
        case 'f':
        case 'F':
            if($idade<25){
                $aumento = $salario * 0.20;
                break;
                }
            $aumento = $salario * 0.25;
            break;
        
    };



    echo "Salario atual: " . $salario . "\n";
    echo "Aumento: " . $aumento . "\n";
    echo "Novo salario: " . ($salario + $aumento) ."\n";