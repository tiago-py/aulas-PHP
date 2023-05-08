<?php
    $soma = 1;
    $casa = 1;
    $grao = 1;

    do{
        $casa++;
        $grao*=2;
        $total += $grao;
        echo "na casa $casa tem $grao \n";
    }while($casa < 64);

    echo "Total de graos: $total \n";