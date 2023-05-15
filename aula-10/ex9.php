<?php
    function numerosPares(int $a){
        $numeros = 0;
        while($numeros<$a){
            if($numeros%2==0){
                echo $numeros . "\n";
            }
            $numeros++;
        
        }
        return $numeros;
    }
    echo numerosPares(10)
?>