<?php
    
    $num = [];
    for ($i = 1; $i <= 5; $i++) {
        $num[] = readline("Digite um número");
    }

    $sum = 0;
    for ($i = 0; $i < 5; $i++) {
        $sum += $num[$i];
    }
    $media = $sum / 5;

    echo "A média dos números digitados é: $media\n";