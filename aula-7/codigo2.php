<?php
 
    $idade = readline("Digite sua idade: \n");

    $salario = readline("Digite seu salario em reais: \n");

    $sexo = readline("Digite seu sexo M [Masculino] F [Feminino]: \n");

if(($sexo === 'm' || $sexo === 'M') and ($idade  < 30)){
    $aumento = $salario * 0.15;
}elseif(($sexo === 'f' || $sexo === 'F') and ($idade < 25)){
    $aumento = $salario * 0.20;
}else{
    $aumento = $salario * 0.25;
}


    echo "Salario atual: " . $salario . "\n";
    echo "Aumento: " . $aumento . "\n";
    echo "Novo salario: " . ($salario + $aumento) ."\n";