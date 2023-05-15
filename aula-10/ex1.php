<?php
    function mult(int $a, int $b){
        $soma = 0;
        for($i = 1; $i <= $b; $i++){
            $soma += $a;
         
        }
        return $soma;
    }
    echo mult(10,3);
?>