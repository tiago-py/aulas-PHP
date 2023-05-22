<?php
    function potencia(float $base, float $expoente){
        $result = 1;
        for($i = 0; $i<$expoente;$i++){
             $result *= $base;
        }
        return $calc;
    }

    echo potencia(2, 2);
?>
