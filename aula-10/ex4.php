
<?php
function soma(int $a){
        $cont = $a;
        while($cont>=1){
            $a += ($cont-1);
            $cont--;
        }
        return $a;
    }
    echo soma(5);

?>