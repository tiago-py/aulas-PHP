<?php
    function fibonacci($n){
        if($n == 0) return 0;
        if($n == 1) return 1;
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
    
    $n = intval(readline("Digite um número: "));
    $resultado = fibonacci($n);
    echo "O " . $n . "° número da sequência de Fibonacci é: " . $resultado;