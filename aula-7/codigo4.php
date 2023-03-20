<?php

    function primo($num){
        if($num <=1)return false;
        for($i=2; $i<=$num/2; $i++){
            if($num % $i == 0) return false;
        }
        return true;
    }

    $contador = 0;
    $soma_primo = 0;

    do{
        $n = readline("Informe um número: \n");
        if(primo($n)){
            $contador++;
            $soma_primo += $n;
        }
    }while($contador < 3);

    echo "O resultado da soma dos números primos é: " . $soma_primo;

    
