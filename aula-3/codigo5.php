<?php

    $num = 500;#váriavel local
    echo "$num \n";
    
    function fazAlgo(){
        global $num;
        $num = $num+1;    
        echo "$num \n";
        
   }
   fazAlgo();#chamando a função
   echo $num;
   ?>
