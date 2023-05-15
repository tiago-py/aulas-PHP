<?php
    function potencia(float $base, float $expoente){
        for($i = 0; $i<=$base;$i++){
             $calc = $base*$expoente;
        }
        return $calc;
    }

    echo potencia(2, 2);
?>