<?php
    function multiplicacao(int $a){
        
        for($i = 1; $i <= 10; $i++){
            echo "$a X $i = " .  $a*$i . "\n";
        }
        
    }
 echo multiplicacao(5);
?>