<?php
    function repeatString(string $string, int $num){
        for($i = 0; $i < $num;$i++){
            echo $string . "\n";
        }
    }
    echo repeatString("teste", 3);
?>