<?php
    function somaDigitos(int $num){
        $soma = 0;
        $string = (string)$num;
        $tamanho = strlen($string);
        $i = 0;

        while($i < $tamanho){
            $n1 = intval($string[$i]);
            $soma += $n1;
            $i++;
        }
        return $soma;

    }
    echo somaDigitos(12)
?>