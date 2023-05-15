<?php
    function menorDivisor(int $num) {
        $div = 2; 
        while ($div <= $num) {
            if ($num % $div === 0) {
                
                return $div;
            }
            $div++;
        }
    
        return $num;
    }
    
   
 
   echo menorDivisor(15);
    
?>